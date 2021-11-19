---
title: General modding
theme: learn2
taxonomy:
    category: docs
---


**!modlogset modlog**  
`!modlogset modlog [channel]`
Set a channel as the modlog.
Omit <channel> to disable the modlog.

**!purge**  
Deletes a provided amount of messages from the channel
`!purge [number of messages]`
>!purge 78

**!slowmode**  
Changes channel's slowmode setting.
`Syntax: !slowmode [interval=0:00:00]`

**!ban**  
Bans a user  
You have to tag a user, and optionally you can add how many days of messages you want to delete, and a reason to appear in the logs.  
`!ban [user] [days] [reason]`  
[user] a tagged person  
[days] is nuber of days of messages to delete  
[reason] is for the logs.  
If [days] is not a number, it's treated as the first word of the reason.  
Minimum 0 days, maximum 7.  
>!ban @cutie 5 posting spam time and time again

**!hackban**  
Bans user(s) that are not currently in the server, optionally you can add how many days of messages you want to delete, and a reason to appear in the logs.  
`!hackban [userID] [days] [reason]`  
[userID] a user ID  
[days] is nuber of days of messages to delete, if they have been in your discord before  
[reason] is for the logs.  
If [days] is not a number, it's treated as the first word of the reason.  
Minimum 0 days, maximum 7.  
>!hackban @cutie spamming in that other discord i'm in

**!kick**  
Kick a user.   
`!kick [user] [reason]`  

**!softban**  
Kick a user and delete 1 day's worth of their messages.  
`Syntax: !softban <user> [reason]`  

**!tempban**  
Temporarily ban a user from this server.  
`Syntax: !tempban <user> [days=1] [reason]`  

**!unban**  
Unban a user from this server.  
`Syntax: !unban <user_id> [reason]`  
*Requires specifying the target user's ID, To find this, you may either:
1. Copy it from the mod log case (if one was created), or
2. enable developer mode, go to Bans in this server's settings, right-
click the user and select 'Copy ID'.*

**!userinfo**  
Show information about a user.  

**!names**  
Show previous names and nicknames of a user.  

**!rename**  
Change a user's nickname.  
`Syntax: !rename <user> [nickname]`

**!mute**  
Mute users.  

**!unmute**  
Unmute users.  

**!voiceban**  
Ban a user from speaking and listening in the server's voicechats   
`Syntax: !voiceban <user> [reason]`

**!voicekick**  
Kick a member from a voice channel.  
`Syntax: !voicekick <member> [reason]`

**!voiceunban** Unban a user from speaking and listening in the server.  
`Syntax: !voiceunban <user> [reason]`

**!modset**  
Manage server administration settings.  



Warnings:
actionlist List all configured automated actions for Warnings.  
mywarnings List warnings for yourself.  
reasonlist List all configured reasons for Warnings.  
unwarn Remove a warning from a user.  
warn Warn the user for the specified reason.  
warnaction Manage automated actions for Warnings.  
warnings List the warnings for the specified user.  
warningset Manage settings for Warnings.  
warnreason Manage warning reasons.  


###### Moderation Configuration {#config}

**!modset banmentionspam**  
Set the autoban conditions for mention spam.
**!modset defaultdays**  
Set the default number of days worth of messages to...
**!modset deleterepeats**  
Enable auto-deletion of repeated messages.
**!modset dm**  
Toggle whether a message should be sent to a user when they ...
**!modset hierarchy**  
Toggle role hierarchy check for mods and admins.
**!modset reinvite**  
Toggle whether an invite will be sent to a user when u...
