<!DOCTYPE html>
<html>

<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <meta content="utf-8" http-equiv="encoding" />
    <title>Lord</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/sinon.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/sinon.png" />
    <meta property="og:title" content="Lord" />
    <meta property="og:image" content="assets/sinon.png" />
    <meta property="og:url" content="https://www.Projects.PsychoCoding.net" />
    <meta property="og:description" content="Welcome to my little corner of the world!" />
    <meta property="og:type" content="website" />
    <meta name="keywords" content="lord lordpsychotic portfolio psychocoding psycho coding" />
    <meta name="author" content="Lord" />
    <meta name="description" content="Welcome to my little corner of the world!" />
    <meta name="robots" content="noindex, nofollow" />
    <style>
        html,
        body {
            font-size: large;
            color: turquoise;
            background: url(/assets/bg.gif) no-repeat center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        a:link {
            color: blue;
        }

        a:visited {
            color: cyan;
        }

        a:hover {
            color: darkblue;
        }

        a:active {
            color: gray;
        }

        .corner {
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .bar {
            width: 100%;
            height: auto;
            background: rgba(0, 0, 0, 0.6);
            text-align: center;
            border: 1px solid;
            border-width: 1px 0;
            border-color: blue;
        }

        .top {
            position: absolute;
            top: 0%;
        }

        .main {
            padding-top: 5px;
            padding-bottom: 5px;
            position: absolute;
            top: 30%;
        }

        .bottom {
            padding-top: 5px;
            bottom: 0;
            border-bottom: 0;
            position: absolute;
        }

        .projects {
            width: 500px;
            border: 1px solid blue;
            margin: 20px auto;
            position: relative;
        }

        .projects:before {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            width: 100%;
            height: 20px;
            background-image: linear-gradient(to top, rgba(255, 255, 255, 0), black);
            pointer-events: none;
        }

        .projects:after {
            content: '';
            display: block;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 20px;
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0), black);
            pointer-events: none;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
            max-height: 140px;
            overflow: hidden;
            overflow-y: auto;
        }

        ul::-webkit-scrollbar {
            border-radius: 10px;
            -webkit-appearance: none;
            width: 5px;
        }

        ul::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: blue;
        }

        li {
            margin: 0;
            padding: 10px;
            border-bottom: 1px solid blue;
            display:flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        li:last-child {
            border-bottom: none;
        }

        img.projicon{
            max-width: 30px;
            margin-right: 10px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="bar main">
        <h1>Here's some of my public projects!</h1>
        <div class="projects">
            <ul>
                <?php
                $projdir = "/var/wwwProjs";
                $directories = glob($projdir . '/*', GLOB_ONLYDIR);
                foreach ($directories as $fulldir) {
                    $dir = str_replace($projdir, "", $fulldir);
                    
                    $imgsrc = $fulldir."/icon.png";
                    if (file_exists($imgsrc)) {
                        $imgsrc = $dir."/icon.png";
                    } else {
                        $imgsrc = "assets/sinon.png";
                    }

                    if ($dir !== "/assets") {
                        echo "<li><img class='projicon' src='$imgsrc'/><a href='" . $dir . "'>" . file_get_contents($fulldir . "/projname.txt") . "</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="bar bottom">
        Welcome to my little corner of the world!
    </div>
</body>
<footer>
    <img class="corner" width=5% src="/assets/sinon.png" />
</footer>

</html>