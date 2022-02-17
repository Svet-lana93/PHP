```sql
select 
    if(
        gender = 'm', 
        concat('This is ', name, ', he has email ', email), 
        concat('This is ', name, ', she has email ', email)
    ) as info from people;
		
select 
    if(
        gender = 'm', 
        concat('We have ', count(*), ' boys!'),
        concat('We have ', count(*), ' girls!')
    ) as 'Gender information:' from people group by gender;
```

