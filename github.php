<?php

/*
Script made by Ricardo Pereira <3
Follow my github profile https://github.com/RicardoJPereira
*/

  

function test() {
    $url = "https://api.github.com/users/RicardoJPereira";

    $options  = array('http' => array('user_agent'=> $_SERVER['HTTP_USER_AGENT']));
    $context  = stream_context_create($options);
    $data = file_get_contents($url, false, $context); 
    $user_data  = json_decode($data, true);


    $username = $user_data['login'];
    $avatar = $user_data['avatar_url'];
    $bio = $user_data['bio'];
    $urluser = $user_data['html_url'];
    $followers = $user_data['followers'];
    $public_repos = $user_data['public_repos'];


    echo '<img src="'.$avatar.'"/><br>
        <a target="_blank" href="'.$urluser.'" class="text-white">'.$username.'</a><br>
        <span>Bio: '.$bio.' </span><br>
        <span>Followers: '.$followers.' </span><br>
        <span>Repositories: '.$public_repos.' </span>';

}
 
    test();

?>


