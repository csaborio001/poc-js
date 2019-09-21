# POC JS

This is a simple proof of concept on how to pass data from WordPress in PHP
to a script in Javascript.

# Instructions

1. Load the plugin in WordPress, activate it.
2. Visit the front page of the WordPress install.
3. Examine the JavaScript console, you should get this output:

![Image](https://lh5.googleusercontent.com/vhv1QAP5oaBYt5jVq0pIocKU9-rx2RXvxaGMK3ZicyJfCDQbev0veDNXItw)

# What does it all mean?

This is simple to show how variables can be shared between WordPress and JavaScript quite easily.

Have a look inside the poc-js.php to understand how things are loaded and passed over. Then
have a look inside assets/poc.js to see how these values are loaded from within the Javascript file.