# Phishing-facebook-site
Html, css, and PHP, to make phishing on the facebook login page

I am working with Kali Linux on VM VirtualBox

I was created the files: (In htdocs folder of XAMPP).
index.html, style.css - looks like facebook login screen. 
server.php – the server side. To get the victim's credentials and to redirect to the original site. (I used XAMPP for the server side).
password.txt – store the credentials on the server side.

![תמונה](https://user-images.githubusercontent.com/57419731/137400020-3104521d-e5b1-4057-ad10-59e3dd8e2ae4.png)


By command “sudo nano /etc/hosts” I can config the name of the localhost to be “fakebook.com”.

![תמונה](https://user-images.githubusercontent.com/57419731/137400048-63e593ef-5100-431c-9da5-321b620c82bc.png)

When the user go to http://fakebook.com/en/ he will get this page:

![תמונה](https://user-images.githubusercontent.com/57419731/137400078-9ad6dd83-6c60-4f67-9882-2cfaabeca0f3.png)


The user input his username and password and click on the Log in button.

![תמונה](https://user-images.githubusercontent.com/57419731/137400094-ecc5664f-fb87-4e5c-a565-e4b2ccfd426a.png)

He was redirected to the real site. https://www.facebook.com/ 

![תמונה](https://user-images.githubusercontent.com/57419731/137400108-59fa461a-a54b-4977-a564-8df1c0bbd696.png)


His credentials was written to password.txt.

![תמונה](https://user-images.githubusercontent.com/57419731/137400120-aa5e9ef9-da66-4c6b-8809-4943dac419fe.png)


