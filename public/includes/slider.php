<div id="wrap_slider">
    <div id="container_slider">
        <img id="img" src="public/images/img1.jpg"/>
        <div id="left_holder">
            <i onclick="slide(-1)" id="left" class="fa fa-angle-left"></i>
        </div>
        <div id="right_holder">
            <i class="fa fa-angle-right" id="right" onclick="slide(+1)"></i>
        </div>
    </div>
</div>
<script>
    function goTo(x){
        var image = document.getElementById('img');
        image.src = "public/images/img" + x + ".jpg";
        circleFunc(x);
    }

    var imagecounter = 1;
    var total = 5;

    function slide(x){
        if(x == undefined){
            x = 1;
        }
        var image = document.getElementById('img');
        imagecounter = imagecounter + x;

        if(imagecounter > total){
            imagecounter = 1;
        } else if (imagecounter < 1){
            imagecounter = total;
        }
        image.src = "public/images/img" + imagecounter + ".jpg";
        circleFunc(imagecounter); }
    timerid = setInterval(slide,4000);

    function circleFunc(imagecounter){
        var buttons = document.getElementById('buttons');
        //buttons.innerHTML = "";

        for(i=1; i <= total; i++){
            var elem = document.createElement("img");
            if(i == imagecounter){
                elem.setAttribute("src","public/images/sl1.jpg"); }
            else{
                elem.setAttribute("src","public/images/sl0.jpg");
            }
            //buttons.appendChild(elem);
        }
    }
</script>