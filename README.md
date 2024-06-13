The objective is to create three PHP pages:
• login.php: which authenticates the user. It contains a form containing a text box, a password box and a submit button.
• session.php: which represents the limited access page. No visitor has the right to see its content if it has not been authenticated by the login.php page.
• disconnection.php: is the page which allows you to disconnect the client (destroy the session) and redirect the browser to the login.php page.
If the client attempts to directly access the session.php page while he is not authenticated, he will immediately be redirected to the login.php page. If it provides a good login and a
good password then they will be redirected to the session.php page which they now have the right to consult.
To simplify, we will statically define the correct login which is "user" and the correct password which is "1234".
