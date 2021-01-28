## Welcome to Address Book

**Address Book** is an online API / web application that contains different users contacts information.

### How it works ###

Based on Restful APIs,this application offer you services to add / update / delete / select and search from the user's address book. It also contains an web application for a more user friendly interface that the users can use to access their address book.

Give them a try:

### Contact fetch Interface ###

The component use Rest protocol so you can access it using get request by sending the text in the text field of the body to the url 

"**server-ip:5000/getContacts?userId=?&name=?**"

**userId** is the id of the user that you want to access it address book
**name** is mandatory if you want to search for a contact, it will return all the contact that their name this value

The component will return a json response with the contacts of the user if exists.

### Adding a contact interface ###

The component use Rest protocol so you can access it using post request by sending the text in the text field of the body to the url 

"**server-ip:5000/addContacts**"

bellow is json template of the request to be sent to the API

{"userid":"5",								--Id of the user that you to add the contact to his address book
	"name":"test22",
	"email":"test@test.b",
	"permanantAddress":"permanantAddress",
	"temporaryAddress":"qwer",
	"mobile":"70707070"
}

The component will return a status of success or failure.

### Updating a contact interface ###

The component use Rest protocol so you can access it using post request by sending the text in the text field of the body to the url 

"**server-ip:5000/updateContacts**"

bellow is json template of the request to be sent to the API

{"id":"6",									--id of the contact to be updated
	"name":"test2",
	"email":"test@test.b",
	"permanantAddress":"permanantAddress",
	"temporaryAddress":"qwer",
	"mobile":"70707070"
}

### Deleting a contact interface ###

The component use Rest protocol so you can access it using post request by sending the text in the text field of the body to the url 

"**server-ip:5000/deleteContacts**"

bellow is json template of the request to be sent to the API

{"id":3				--id of the contact to delete
}

The component will return a status of success or failure.
### Run the server ###

To run the server, you just have to run interface.py under /interface and the server will run locally on the port 5000

## Notes to implement this solution at your machine ##

1) You should have python 3 on your machine
2) You should install flask and mysql.connector for python
3) You should have mysql server 
4) Change the configuration in interface/config.py to match your mysql server
5) Change the configuration in include/db.php to match your mysql server
6) Import \Database\addressbook.sql to your MySql server
## Notes about the application ##
Currently, the web application is still not fully done and still needs some modifications. Like handling validation on adding and updating a contact, and when updating a contact the form is not populated with the contact's information so you'll have to fill them manually.


## I HOPE THAT YOU ENJOY THIS APPLICATION ##