---
title: Levels and profile system
theme: learn2
taxonomy:
    category: docs
---

##Showing levels and profiles
**!rank**  
Shows the rank of the person you tag, or yours if you don't tag anyone.  
`!rank [username, or left blank]`
>!rank @cutie

**!profile**  
Shows you your profile, or someone else's profile if you tag them.  
`!profile [username, or left blank]`
>!profile @cutie


##Edit your info
**!editprofile title**  
Sets the title in your profile, up to 20 characters.  
`!editprofile [title text]`
>!editprofile title a little cutie

**!editprofile info**  
Sets the description in your profile, up to 149 characters.  
`!editprofile info [Info text]`
>!editprofile info I love cats, I love every kind of cat, I just wanna hug all of them, but I can't, Can't hug every cat.

####Edit your backgrounds
**!backgrounds**  
Gives a list of backgrounds.  
Remember to tell it what type of backgrounds you want to look at; profile, rank or levelup.  
`!backgrounds [profile, rank or levelup]`
>!backgrounds profile

**!editprofile bg**  
Set your profile background. You can see the available backgrounds with the "!backgrounds profile" command. changing backgrounds costs 100 credits.  
`!editprofile bg [name of background]`
>!editprofile bg default

**!editrank bg**
Set your rank background. You can see the available backgrounds with the "!backgrounds rank" command. changing backgrounds costs 100 credits.  
`!editprofile bg [name of background]`
>!editrank bg default

**!editlvl bg**  
Set your level up message background. You can see the available backgrounds with the "!backgrounds levelup" command. changing backgrounds costs 100 credits.  
`!editprofile bg [name of background]`
>!editlvl bg default

##Set profile colors

**!editprofile color**  
Set one of the colours in your profile.  
`!editprofile color [section] [color code]`  

| Section | Description |
| ------ | ----------- |
| exp | Color of your xp bar and your empty badge slots  
| rep | Color of the rep counter in the upper right  
| badge | Background color of the xp bar  
| info | Background color of the text field  
| all | Sets all colours  

| Colors | Description |
| ------ | ----------- |
| default | The default look, to reset when you dun goofed|
| color code | Hex colour codes. Should look like #22ff33 and can be found on sites [like this](https://htmlcolorcodes.com/ "https://htmlcolorcodes.com/")|
>!editprofile color info #89cff0  

**!editrank color**  
Set one of the colours in your rank card.  
`!editrank color [section] [color code]`

| Section | Description |
| ------ | ----------- |
| exp | Color of your xp bar and your empty badge slots  
| info | Background color of the text field  

| Colors | Description |
| ------ | ----------- |
| default | The default look, to reset when you dun goofed|
| color code | Hex colour codes. Should look like #22ff33 and can be found on sites [like this](https://htmlcolorcodes.com/ "https://htmlcolorcodes.com/")|
>!editrank color info #89cff0  

**!editlvl color**  
Set one of the colours in your rank card.  
`!editlvl color info [color code]`

| Section | Description |
| ------ | ----------- |
| info | Background color of the text field |

| Colors | Description |
| ------ | ----------- |
| default | The default look, to reset when you dun goofed|
| color code | Hex colour codes. Should look like #22ff33 and can be found on sites [like this](https://htmlcolorcodes.com/ "https://htmlcolorcodes.com/")|
>!editrank color info #89cff0  

##Badges

**!badges**  
Gives you a list of the badges you already own (or another user if you tag them)  
`!badges [user or blank]`
>!badges @cutie  

**!badge set <Name of badge> <Priority number>**  
Set what badges are displayed on your profile. 1 is first slot etc. For invisible pick -1. For not on profile pick 0.  
`!badge set [Name of badge] [Priority number]`
>!badge set cutie 1  

**!badge available**  
Gives you a list of badges available on the current server.  
`!badge available`
>!badge available  

**!badge buy**  
Allows you to buy a badge you have found via the available command, given you have enough monies.  
`!badge buy [name]`
>!badge buy cutie  
