<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #FFF;
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
            /* mix-blend-mode: screen; */
            mix-blend-mode: darken;
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
    
	    #mobile {
            display: block;
        }
    
	    #desktop {
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
    
	    .start {
		    width: 200px;
		    height: 50px;
		    background-color: transparent;
	    }
    
        .text {
	        font-family: 'helveticaneuer', helvetica, arial, sans-serif;
	        font-weight: 400;
	        /*
	        font-size: 17px;
	        line-height: 21px;
	        */
	        font-size: 47px;
	        line-height: 51px;
	        width: 400px;
	        display: block;
        }
        
        .red {
	        color: #F00;
        }
        
        .green {
	        color: #0F0;
        }
        
        .blue {
	        color: #00F;
        }
        
        .white {
	        color: #FFF;
        }
    </style>
</head>
<body>
    <div id="mobile">
        <button class="start" onclick="request_accelerometer()">Start</button>
    </div>
    <div id="desktop">
        <button class="start" onclick="request_mouse()">Start</button>
    </div>

    <div id="logo">

	<!-- 
        <div id="logo-r"><img class="r" src="block-r.svg"></div>
        <div id="logo-g"><img class="g" src="block-g.svg"></div>
        <div id="logo-b"><img class="b" src="block-b.svg"></div>
        <div id="logo-w"><img class="w" src="block-w.svg"></div>
	-->

        <div id="logo-r" class="text red">New York Consolidated (NYC) is a new nonprofit organization that <a href=''>seeks</a> to foster equity through art and <a href=''>publishing</a>.</div>
        <div id="logo-g" class="text green">New York Consolidated (NYC) is a new nonprofit organization that <a href=''>seeks</a> to foster equity through art and <a href=''>publishing</a>.</div>
        <div id="logo-b" class="text blue">New York Consolidated (NYC) is a new nonprofit organization that <a href=''>seeks</a> to foster equity through art and <a href=''>publishing</a>.</div>

    </div>
    <script src='block.js'></script>
</body>
</html>
