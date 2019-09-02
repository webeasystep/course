
# Instructions
- The GET method produces a long string that appears in your server logs, in the browser's Location: box.
- The GET method is restricted to send up to 1024 characters only.
- Never use GET method if you have password or other sensitive information to be sent to the server.
- GET can't be used to send binary data, like images or word documents, to the server.
- The data sent by GET method can be accessed using QUERY_STRING environment variable.
The PHP provides $_GET associative array to access all the sent information using GET method.

- The POST method does not have any restriction on data size to be sent.
- The POST method can be used to send ASCII as well as binary data.
- The data sent by POST method goes through HTTP header so security depends on HTTP protocol.
-  By using Secure HTTP you can make sure that your information is secure.
- The PHP provides $_POST associative array to access all the sent information using POST method.

 
 # Summary
 * handle form actions with super global($REQUEST-$_GET-$POST)
 * local scope - global scope
 * handle all actions with global conditions
 * what is create functionality and how its works
 * what is edit functionality and how its works
 * using header to redirect to another page

# Resources


# Quiz


