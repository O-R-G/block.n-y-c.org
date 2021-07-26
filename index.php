<!DOCTYPE html>
<html>
<head>
<style>
    body {
        background-color: #000;
    }

    #logo {
	/*
        position: relative;
        height: 100%;
	mix-blend-mode: screen;
	*/
        /* opacity: 0.75; */
        z-index: 1000;
    }

    #logo div {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        mix-blend-mode: screen;
	width: 80%;
        opacity: 1.0;
    }

    #logo-r,
    #logo-g,
    #logo-b {
        display: block;
    }

    #logo-w {
	display: none;
	}

	#start {
		width: 100px;
		height: 200px;
		background-color: transparent;
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
        <button id="start" style="height:50px;" onclick="getAccel()">Start</button>

        <div id="logo-r"><img class="r" src="block-r.svg"></div>
        <div id="logo-g"><img class="g" src="block-g.svg"></div>
        <div id="logo-b"><img class="b" src="block-b.svg"></div>
        <div id="logo-w"><img class="w" src="block-w.svg"></div>
    </div>
    <script src='block.js'></script>
</body>
</html>
