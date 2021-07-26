<!DOCTYPE html>
<html>
<head>
<style>
    body {
        background-color: #CCC;
    }

    #logo {
        position: relative;
        height: 100%;
        mix-blend-mode: screen;
        /* opacity: 0.75; */
        z-index: 1000;
    }

    #logo div {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        mix-blend-mode: screen;
        opacity: 1.0;
    }

    #logo-r, 
    #logo-g,
    #logo-b,
        display: block;
    }

    /* prob dont need this
    #logo-w {
    }
    */

    #debug {
        position: fixed;
        left: 10px;
        bottom: 10px;
        background-color: #FF0;
        visibility: hidden;
    }
}
</style>
</head>
<body>
    <div id="logo">    
        hello, world.
        <div id="logo-r"><img class="r" src="/media/svg/ica-r.svg"></div>
        <div id="logo-g"><img class="g" src="/media/svg/ica-g.svg"></div>
        <div id="logo-b"><img class="b" src="/media/svg/ica-b.svg"></div>
        <div id="logo-w"><img class="w" src="/media/svg/ica-w.svg"></div>
    </div>
    <script src='block.js'></script>
</body>
</html>
