<?php

require_once('src/Music.php');
require_once('src/Playlist.php');
require_once('src/Song.php');

$songOne = new Song('Lost In Stereo');
$songTwo = new Song('Running from Lions');
$songThree = new Song('Guts');

$playListOne = new Playlist();
$playListTwo = new Playlist();
$playListThree = new Playlist();
$playListTwo->addSong($songOne);
$playListTwo->addSong($songTwo);
$playListThree->addSong($songThree);
$playListOne->addSong($playListTwo);
$playListOne->addSong($playListThree);

echo $playlistOne->play();
