import mysql.connector
import json
import config as conf

# MySql connector settings
mysql = mysql.connector.connect(
  host=conf.dbUrl,
  user=conf.user,
  password=conf.password,
  db=conf.dbName
)

# Method to extrat contacts from DB
def getContacts(name,userId):
  cur = mysql.cursor(prepared=True)
  if name is not None :
    cur.execute("SELECT * FROM persons where user_id = %s and lower(name) like lower('%"+name+"%') ",userId)
  else:
    cur.execute("SELECT * FROM persons where user_id = %s",userId)
  rv = cur.fetchall()
  if len(rv) > 0 :
    row_headers=[x[0] for x in cur.description] #this will extract row headers
    json_data=[]
    for result in rv:
        json_data.append(dict(zip(row_headers,result)))
    return json_data
  else :
    return False

# Method to update contacts in DB
def updateContacts(params):
  cur = mysql.cursor(prepared=True)
  cur.execute("UPDATE persons SET name = %s , mobile = %s , email = %s , permanant_address = %s , temporary_address = %s where id = %s",
  (params['name'],params['mobile'],params['email'],params['permanantAddress'],params['temporaryAddress'],params['id']))
  mysql.commit()
  return cur.rowcount > 0

# Method to add contacts in DB
def addContacts(params):
  cur = mysql.cursor(prepared=True)
  cur.execute("INSERT INTO persons (`user_id`, `name`, `mobile`, `email`, `permanant_address`, `temporary_address`) VALUES (%s,%s,%s,%s,%s,%s)",
  (params['userId'],params['name'],params['mobile'],params['email'],params['permanantAddress'],params['temporaryAddress']))
  mysql.commit()
  return cur.rowcount > 0

# Method to delete contacts in DB
def deleteContacts(params):
  cur = mysql.cursor(prepared=True)
  cur.execute("DELETE FROM persons where id = %s",(params))
  mysql.commit()
  return cur.rowcount > 0