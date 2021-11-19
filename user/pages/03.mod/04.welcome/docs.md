---
title: Welcome messages
theme: learn2
taxonomy:
    category: docs
---


#####Toggles
To turn stuff on and off  
**!wcount toggle**  
Toggle welcome messages in this channel.  
`!wcount toggle`

**!wcount deletelast**  
Toggle deleting the previous welcome message when a new one is posted.  
`!wcount deletelast`  


#####Settings
**!wcount joinrole**  
Set a role which a user must receive before they're welcomed.  
This means that instead of the welcome message being sent when the user joins the server, the welcome message will be sent when they receive a particular role.  
`!welcomecount joinrole [role]`
>!wcount joinrole verified

**!wcount message**  
Set the bot's welcome message.  
`!welcomecount message [message]`

This message can be formatted using these parameters:  
{mention} - Mention the user who joined  
{username} - The user's display name  
{server} - The name of the server  
{count} - The number of users who joined today.  
{plural} - Empty if count is 1. 's' otherwise.  
{total} - The total number of users in the server.  

>!welcomecount message  
Hey there {mention}!  
{username} is the {total}th person in {server}  
There has been {count} user{plural} joining {server} today!  
**Welcome!**  
