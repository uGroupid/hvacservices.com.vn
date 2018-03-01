(function(window,document,undefined){var absPos=function(element){var offsetLeft,offsetTop;offsetLeft=offsetTop=0;if(element.offsetParent){do{offsetLeft+=element.offsetLeft;offsetTop+=element.offsetTop;}while(element=element.offsetParent);}
return[offsetLeft,offsetTop];};var ProgressCircle=function(params){this.canvas=params.canvas;this.minRadius=params.minRadius||15;this.arcWidth=params.arcWidth||5;this.gapWidth=params.gapWidth||3;this.centerX=params.centerX||this.canvas.width/2;this.centerY=params.centerY||this.canvas.height/2;this.infoLineLength=params.infoLineLength||60;this.horizLineLength=params.horizLineLength||10;this.infoLineAngleInterval=params.infoLineAngleInterval||Math.PI/8;this.infoLineBaseAngle=params.infoLineBaseAngle||Math.PI/6;this.context=this.canvas.getContext('2d');this.width=this.canvas.width;this.height=this.canvas.height;this.circles=[];this.runningCount=0;};ProgressCircle.prototype={constructor:ProgressCircle,addEntry:function(params){this.circles.push(new Circle({canvas:this.canvas,context:this.context,centerX:this.centerX,centerY:this.centerY,innerRadius:this.minRadius+ this.circles.length*(this.gapWidth+ this.arcWidth),arcWidth:this.arcWidth,infoLineLength:this.infoLineLength,horizLineLength:this.horizLineLength,id:this.circles.length,fillColor:params.fillColor,outlineColor:params.outlineColor,progressListener:params.progressListener,infoListener:params.infoListener,infoLineAngle:this.infoLineBaseAngle+
this.circles.length*this.infoLineAngleInterval,}));return this;},start:function(interval){var self=this;this.timer=setInterval(function(){self._update();},interval||33);return this;},stop:function(){clearTimeout(this.timer);},_update:function(){this._clear();this.circles.forEach(function(circle,idx,array){circle.update();});return this;},_clear:function(){this.context.clearRect(0,0,this.canvas.width,this.canvas.height);return this;},};var Circle=function(params){this.id=params.id;this.canvas=params.canvas;this.context=params.context;this.centerX=params.centerX;this.centerY=params.centerY;this.arcWidth=params.arcWidth;this.innerRadius=params.innerRadius||0;this.fillColor=params.fillColor||'#fff';this.outlineColor=params.outlineColor||this.fillColor;this.progressListener=params.progressListener;this.infoLineLength=params.infoLineLength||250;this.horizLineLength=params.horizLineLength||50;this.infoListener=params.infoListener;this.infoLineAngle=params.infoLineAngle;this.outerRadius=this.innerRadius+ this.arcWidth;if(!this.infoListener)return;var angle=this.infoLineAngle,arcDistance=(this.innerRadius+ this.outerRadius)/ 2,sinA=Math.sin(angle),cosA=Math.cos(angle);this.infoLineStartX=this.centerX+ sinA*arcDistance;this.infoLineStartY=this.centerY- cosA*arcDistance;this.infoLineMidX=this.centerX+ sinA*this.infoLineLength;this.infoLineMidY=this.centerY- cosA*this.infoLineLength;this.infoLineEndX=this.infoLineMidX+
(sinA<0?-this.horizLineLength:this.horizLineLength);this.infoLineEndY=this.infoLineMidY;var infoText=document.createElement('div'),style=infoText.style;style.color=this.fillColor;style.position='absolute';style.left=this.infoLineEndX+ absPos(this.canvas)[0]+'px';infoText.className='ProgressCircleInfo';infoText.id='progress_circle_info_'+ this.id;document.body.appendChild(infoText);this.infoText=infoText;};Circle.prototype={constructor:Circle,update:function(){this.progress=this.progressListener();this._draw();if(this.infoListener){this.info=this.infoListener();this._drawInfo();}},_draw:function(){var ctx=this.context,ANGLE_OFFSET=-Math.PI/2,startAngle=0+ ANGLE_OFFSET,endAngle=startAngle+ this.progress*Math.PI*2,x=this.centerX,y=this.centerY,innerRadius=this.innerRadius,outerRadius=this.outerRadius;ctx.fillStyle=this.fillColor;ctx.strokeStyle=this.outlineColor;ctx.beginPath();ctx.arc(x,y,innerRadius,startAngle,endAngle,false);ctx.arc(x,y,outerRadius,endAngle,startAngle,true);ctx.closePath();ctx.stroke();ctx.fill();return this;},_drawInfo:function(){var pointList,lineHeight;pointList=[[this.infoLineStartX,this.infoLineStartY],[this.infoLineMidX,this.infoLineMidY],[this.infoLineEndX,this.infoLineEndY],];this._drawSegments(pointList,false);this.infoText.innerHTML=this.info;lineHeight=this.infoText.offsetHeight;this.infoText.style.top=this.infoLineEndY+
absPos(this.canvas)[1]- lineHeight/2+'px';return this;},_drawSegments:function(pointList,close){var ctx=this.context;ctx.beginPath();ctx.moveTo(pointList[0][0],pointList[0][1]);for(var i=1;i<pointList.length;++i){ctx.lineTo(pointList[i][0],pointList[i][1]);}
if(close){ctx.closePath();}
ctx.stroke();},};window.ProgressCircle=ProgressCircle;})(window,document);