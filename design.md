# RevShare Design

## Models / Database

### User - user
| Column           | Data Type        | Not Null | Default Value | Extras         |
|------------------|------------------|----------|---------------|----------------|
| id               | unsigned integer | true     |               | auto increment |
| referer_user_id  | unsigned integer | false    | null          |                |
| first_name       | string           | true     |               |                |
| last_name        | string           | true     |               |                |
| email            | string           | true     |               | unique         |
| password         | string           | true     |               |                |
| referral_link    | string           | true     |               | unique         |
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