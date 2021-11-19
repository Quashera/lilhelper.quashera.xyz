---
title: Role  management/reaction roles
theme: learn2
taxonomy:
    category: docs
---


##Role settings

**!roleset selfadd**  
Allows people to give themselves this role.  
`!roleset selfadd [role] [1 or 0 for yes or no]`  
>!roleset selfadd cutie 1

**!roleset selfrem**  
Allows people to remove themselves from this role.  
`!roleset selfrem [role] [1 or 0 for yes or no]`  
>!roleset selfrem cutie 1


**!rolebind**  
Adds a reaction to a message, and when people click it, they get the role.  
The role is only given if the criteria for it are met.
Make sure you configure the other settings for a role in !roleset  
`!rolebind [role] [channel] [message id] [reaction]`   
**[role]** Name of the role you want to give, remember to put it in "" if it has more than 1 word  
**[channel]** Name of the channel the message you want the bot to react to  
**[message id]** Id of the message you want the bot to react to. to find this enable developer mode in discord appearance settings, and right click the message, there should be a "copy ID" button  
**[reaction]** what emoji do you want for this role? - must be available to the bot, so in the discord or global  
>!rolebind "cutie pie" info 661162397977018368 :regional_indicator_c:

**!hackrole**  
Puts a sticky role on someone not in the server yet. Has to be a sticky role!  
`!hackrole [user ID] [role]`  
>!hackrole 158257963931402240 awoo

**!roleunbind**  
Unbinds a role from a reaction on a message  
`!roleunbind [role] [message ID] [emoji]`  
>!roleunbind awoo 697448957391011891 :blush:

**!clearmessagebinds**  
Clears all role react bindings on the specefied message  
`!clearmessagebinds [channel] [message_id]`  
>!clearmessagebinds general 697440993527595008

### User role commands  
**!srole add**  
Join a role  

**!srole buy**  
Purchase a role

**!srole list**  
Lists the selfroles and any associated costs.  

**!srole remove**  
leave a role

### Settings for role requirements
**!roleset cost**  
Makes a role purchasable for a specified cost.  

**!roleset exclusive**  
Takes 2 or more roles and sets them as exclusive to e...  

**!roleset forbid**  
Forbids a user from gaining a specific role.  

**!roleset requireall**  
Sets the required roles to gain a role  

**!roleset requireany**  
Sets a role to require already having one of another  

**!roleset selfadd**  
Sets if a role is self-assignable via command  

**!roleset selfrem**  
Sets if a role is self-removable (default False)  

**!roleset sticky**  
sets a role as sticky if used without a settings, gets t...  

**!roleset unexclusive**  
Takes any number of roles, and removes their exclus...  

**!roleset unforbid**  
Unforbids a user from gaining a specific role.  

**!roleset viewreactions**  
View the reactions enabled for the server  

**!roleset viewrole**  
Views the current settings for a role  


# Stream role commands  {#stream}
Want to give the people a special role when they're streaming on twitch?  
You've come to the right place!  

**!streamrole setrole**  
Sets what role to give people when they're live  
`!streamrole setrole [role]`  
>!streamrole setrole Live

**!streamrole setmode**  
Change if you want the roles to be on a whitelist or blacklist.  
Whitelist means no one gets the role when live but the ones you have specified.  
Blacklist means everyone gets the role when live unless listed.  
Both lists can contain roles or users directly.  
`!streamrole setmode [blacklist or whitelist]`
>!streamrole setmode blacklist

#### Managing the blacklist and whitelist  

**!streamrole blacklist show**  
Show the blacklisted members and roles in this server.  
`!streamrole blacklist show`  
>!streamrole blacklist show

**!streamrole blacklist add**  
Add a user or role to the Blacklist  
`!streamrole blacklist add [user or role]`  
>!streamrole blacklist add newbies

**!streamrole blacklist remove**  
Remove a user or role from the Blacklist.  
`!streamrole blacklist remove [user or role]`  
>!streamrole blacklist remove newbies

**!streamrole whitelist show**  
Show the whitelisted members and roles in this server.
`!streamrole whitelist show`  
>!streamrole whitelist show

**!streamrole whitelist add**  
Add a user or role to the whitelist  
`!streamrole whitelist add [user or role]`  
>!streamrole whitelist add newbies

**!streamrole whitelist remove**  
Remove a user or role from the whitelist.  
`!streamrole whitelist remove [user or role]`  
>!streamrole whitelist remove newbies

#### Managing stream role alerts

**!streamrole alerts setenabled**  
Sets if the bot should annouce that someone is live and has gotten the role.  
`!streamrole alerts setenabled [true or false]`  
>!streamrole alerts setenabled true

**!streamrole alerts setchannel**  
Sets what channel to post live alerts for the people who recieve the stream roles.  
`!streamrole alerts setchannel [channel]`  
>!streamrole alerts setchannel spam1

**!streamrole alerts autodelete**  
Set if the bot should delete the alerts once people stop streaming.  
This is enabled by default.  
`!streamrole alerts autodelete [true or false]`  
>!streamrole alerts autodelete true

#### Managing game filter

Adding games to the whitelist will make the bot only add the stream role
to members streaming those games. If the game whitelist is empty, the
game being streamed won't be checked before adding the stream role.

**!streamrole games show**  
Show the whitelisted games in this server.  
`!streamrole games show`  
>!streamrole games show

**!streamrole games add**  
Add a game to the whitelist  
`!streamrole games add [game]`  
>!streamrole games add goat simulator

**!streamrole games remove**  
Remove a game from the whitelist.  
`!streamrole games remove [game]`  
>!streamrole games remove goat simulator

**!streamrole games clear**  
Clears the whitelist.    
`!streamrole games clear`  
>!streamrole games clear
