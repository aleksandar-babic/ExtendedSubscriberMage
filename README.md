# Extended subscriber Magento

This extension will allow you to require users to enter their First and Last name when subscribing to newsletter, but good news are that you can easily customize this and add/change fields.

Extension is tested with Magento 1.9.X

### Installation

Simply copy content of code,design and etc directories to your <mag root>/app (Allow overwrite)

Only additional step you should do is clear cache

```sh
rm -rf <mg root>/var/cache/*
```

Once you cleared cache relog if you are already logged in and thats it.

### How does it work

* Extension will create 2 columns in table newsletter_subscriber (for first and last name)
* If you are using default theme extension will automatically add 2 input fields to form, if not you can manually add 2 text inputs with names firstname and lastname , or copy from additional.phtml - html below
* Extension will add 2 fields in Admin area (Newsletter -> Newsletter Subscribers)

```sh
<div class="input-box">
    <input type="text" autocapitalize="off" autocorrect="off" spellcheck="false" name="firstname" class="input-text required-entry" placeholder="First name" />
</div>
<div class="input-box">
    <input type="text" autocapitalize="off" autocorrect="off" spellcheck="false"name="lastname" class="input-text required-entry" placeholder="Last name"/>
</div>
```
