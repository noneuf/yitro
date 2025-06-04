# yitro
A project for a financial advice business

## Email configuration

`contactUs.php` now reads Gmail credentials from the environment. Before
running the application you must set two environment variables:

```
export GMAIL_USERNAME="your_gmail_username"
export GMAIL_PASSWORD="your_gmail_app_password"
```

The credentials are used for sending contact form emails. If these variables
are not set the script will exit with an error.
