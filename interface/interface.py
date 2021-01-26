from flask import Flask, request, abort
import json
import config as conf
import controller as control
from urllib.parse import unquote

# Setting the API
app = Flask(__name__)

# Contacts fetch API
@app.route('/getContacts')
def getContacts():
   name = request.args.get('name')
   if name is not None:
       name = unquote(name)
   userId = request.args.get('userId')
   result = control.getContacts(name , userId)
   if result == False :
       abort(404,'No data found')
   else :
        return json.dumps(result)

# Contacts update API
@app.route('/updateContacts', methods = ['POST'])
def updateContacts():
    params = {
        'id': request.get_json().get('id'),
        'name': request.get_json().get('name'),
        'email': request.get_json().get('email'),
        'permanantAddress': request.get_json().get('permanantAddress'),
        'temporaryAddress': request.get_json().get('temporaryAddress'),
        'mobile': request.get_json().get('mobile')
    }
    
    if control.updateContacts(params) :
        return 'Success'
    else :
        abort(406, description="Update failed.")

# Contacts addition API
@app.route('/addContacts', methods = ['POST'])
def addContacts():
    params = {
        'name': request.get_json().get('name'),
        'email': request.get_json().get('email'),
        'permanantAddress': request.get_json().get('permanantAddress'),
        'temporaryAddress': request.get_json().get('temporaryAddress'),
        'mobile': request.get_json().get('mobile'),
        'userId': request.get_json().get('userid')
    }
    
    if control.addContacts(params) :
        return 'Success'
    else :
        abort(406, description="Addition failed.")

# Contacts delete API
@app.route('/deleteContacts', methods = ['POST'])
def deleteContacts():
    contactId = request.get_json().get('id'),
    if control.deleteContacts(contactId) :
        return 'Success'
    else :
        abort(406, description="Delete failed.")

if __name__ == '__main__':
   app.run(debug=True)