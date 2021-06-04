@props(['title'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ $title }}</title>
</head>

<body>
    <div id="app">
    <header id="top">
        <div id="logo">
            Jared Leach
        </div>
        <div id="menuHandle" v-on:click="showNav = !showNav"><img src="/images/menu.svg" /></div>
        <nav>
            <a href="/">Home</a>
            <a href="/education">Education</a>
            <a href="/skills">Skills</a>
            <a target="_blank" href="https://github.com/jrhd437">Projects</a>
        </nav>
    </header>