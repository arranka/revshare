# RevShare Design

## URL Structure

/ - Main page
/register - Sign up page
/login - Login page
/logout - Logout post URL. Redirects to 

/dashboard - Logged in user's dashboard. Gets redirected to /dashboard/getting-started.
/dashboard/getting-started - Information on how to get started on the site.
/dashboard/revenue-programs - Shows a list of all revenue programs in their specifed categories.
/dashboard/account - Account information, update name, password, email etc.

/a - Redirect to main page.
/a/{username} - Stores cookie of user's id if exists and redirects to main page.
/a/signup/{username} - Stores cookie of user's id if exists and redirects to /register.

/admin/users - Page to manage Users
/admin/revenue-programs - Page to Manage Revenue Programs
/admin/categories - Page to manage categories

## Models / Database

### User - user

| Column           | Data Type        | Not Null | Default Value | Extras         |
|------------------|------------------|----------|---------------|----------------|
| id               | unsigned integer | true     |               | auto increment |
| referer_user_id  | unsigned integer | false    | null          |                |
| username         | string           | true     |               | unique         |
| email            | string           | true     |               | unique         |
| password         | string           | true     |               |                |


### Category - category

| Column           | Data Type        | Not Null | Default Value | Extras         |
|------------------|------------------|----------|---------------|----------------|
| id               | unsigned integer | true     |               | auto increment |
| name             | string           | true     |               |                |


### RevenueProgram - revenue_program

| Column                | Data Type        | Not Null | Default Value | Extras         |
|-----------------------|------------------|----------|---------------|----------------|
| id                    | unsigned integer | true     |               | auto increment |
| name                  | string           | true     |               |                |
| instructions          | string           | true     |               |                |
| about                 | string           | true     |               |                |
| video_url             | string           | false    | null          |                |
| signup_url            | string           | true     |               |                |
| default_referral_link | string           | true     |               |                |
| rating                | unsigned tinyint | true     |               |                |


### UserRevenueProgram - user_revenue_program

| Column              | Data Type        | Not Null | Default Value | Extras         |
|---------------------|------------------|----------|---------------|----------------|
| id                  | unsigned integer | true     |               | auto increment |
| user_id             | unsigned integer | true     |               |                |
| revenue_program_id  | unsigned integer | true     |               |                |
| referral_link       | string           | true     |               |                |