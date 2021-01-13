var MyMar,speed;

$(function (){
	try {
		//ºáÏò¹ö¶¯
		speed=30;
		if ($id('caseMarX').offsetWidth<$id('caseMarX1').offsetWidth){
			$id('caseMarX2').innerHTML=$id('caseMarX1').innerHTML;
			$id('caseMarX3').innerHTML=$id('caseMarX1').innerHTML;
		}
		MyMar=setInterval(Marquee,speed)
		$id('caseMarX').onmouseover=function() { clearInterval(MyMar); }
		$id('caseMarX').onmouseout=function() { MyMar=setInterval(Marquee,speed); }
	}catch (e) {}

});

	function Marquee(){
		try {
			if($id('caseMarX2').offsetWidth-$id('caseMarX').scrollLeft<=0){
				$id('caseMarX').scrollLeft-=$id('caseMarX1').offsetWidth;
			}else{
				$id('caseMarX').scrollLeft+=1.8;
			}
		}catch (e) { clearInterval(MyMar); }
	}

