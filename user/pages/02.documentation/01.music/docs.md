---
title: Music
theme: learn2
taxonomy:
    category: docs
---

#####Starting the music or adding to the list
`!play` Play a URL or search for a track.  
`!bumpplay` Same as play, but forces the song to the start of the queue.  
`!search` search for a track if you don't know exactly the name.  
`!genre` Pick a spotify genre to add to the playlist  
>!play let the bodies hit the floor

#####Skipping, pausing, etc  
`!now` Now playing. also gives buttons for play pause and skip  
`!pause` Pause or resume a playing track.  
`!prev` Skip to the start of the previously played track.  
`!skip` Skip to the next track, or to a given track number.  
`!seek` Seek ahead or behind on a track by seconds or a to a specific point in the song  
`!repeat` Toggle repeat.  
`!shuffle` Toggle shuffle.  
`!stop` Stop playback and clear the queue.  
>!skip 22

#####Queue management  
`!queue` List the songs in the queue.  
`!percent` Queue percentage.  
`!bump` Bump a track number to the top of the queue.  
`!remove` Remove a specific track number from the queue.
>!bump 36

#####Techical stuff  
`!disconnect` Disconnect the bot from the voice channel.  
`!eq` Gives a graphical interface to adjust the eq.   
`!summon` Summon the bot to your voice channel.  
`!volume` Set the volume, 1% - 150%.  
>!volume 45

####Playlists
#####Finding and starting a playlist
`!playlist list` List available playlists.  
`!playlist info` Retrieve information from a saved playlist.  
`!playlist start` Load a playlist into the queue.  
>!playlist start cosy

#####Creating and editing playlists
`!playlist create` Create an empty playlist.  
`!playlist queue` Save the queue to a playlist.
`!playlist save` Save a playlist from an url.  
`!playlist append` Add a track URL, playlist link, or quick search to a playlist  
`!playlist dedupe` Remove duplicate tracks from a saved playlist.  
`!playlist remove` Remove a track from a playlist by url.  
`!playlist delete` Delete a saved playlist.
>!playlist save musikk https://www.youtube.com/watch?v=JAyROGRwhiU&list=PLRJsvym5gftANWYmoKGlwNzbOhLYVJqlc

#####Techical stuff
`!playlist rename` Rename an existing playlist.  
`!playlist update` Updates all tracks in a playlist.  


admin:  
`!playlist copy` Copy a playlist from one scope to another.
