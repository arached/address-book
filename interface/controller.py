import model as dbAccess

def getContacts(name,userId):
   return dbAccess.getContacts(name , userId)

def updateContacts(params):
  return dbAccess.updateContacts(params)

def addContacts(params):
  return dbAccess.addContacts(params)

def deleteContacts(params):
  return dbAccess.deleteContacts(params)