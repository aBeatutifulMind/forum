# A simple forum

## Data Base
### Mysql
Host: local host  
DB: forum
Tables:

1. parent module
'''id, name, sort'''

2. child module
'''id, parent_name, name, info, member_id, sort'''

3. member
'''id, name, password, profile_pic, register)name, last_time

4. content
'''id, module_name, title, content, time, member_id, times'''

5. reply
'''id, content_id, quote_id, content, time, member_id

6. manager
'''id, name, password'''

