
<html>
<head>
<title>animate</title>
<style>
html {
  background: BLACK;
  overflow: hidden;
}

#c {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -260px;
}

.s {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  cursor: pointer;
  float: left;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}
.s:nth-child(n+2) {
  margin-left: 80px;
}

.s:nth-child(1) {
  background: #33ffbb;
  -webkit-animation: r0 2s 0s ease-out infinite;
  -moz-animation: r0 2s 0s ease-out infinite;
  animation: r0 2s 0s ease-out infinite;
}
.s:nth-child(1):hover {
  background: #ff3333;
  -webkit-animation: r20 0.5s 0.4s ease-out infinite;
  -moz-animation: r20 0.5s 0.4s ease-out infinite;
  animation: r20 0.5s 0.4s ease-out infinite;
}

@-webkit-keyframes r0 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 179, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 255, 179, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1affb3, 0 0 12px 10px #333, 0 0 12px 14px #1affb3;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 179, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 255, 179, 0);
  }
}
@-moz-keyframes r0 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 179, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 255, 179, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1affb3, 0 0 12px 10px #333, 0 0 12px 14px #1affb3;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 179, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 255, 179, 0);
  }
}
@keyframes r0 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 179, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 255, 179, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1affb3, 0 0 12px 10px #333, 0 0 12px 14px #1affb3;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 179, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 255, 179, 0);
  }
}
@-webkit-keyframes r20 {
  from {
    box-shadow: 0 0 8px 6px #ff1a1a, 0 0 12px 10px #333, 0 0 12px 14px #ff1a1a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 26, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 26, 26, 0);
  }
}
@-moz-keyframes r20 {
  from {
    box-shadow: 0 0 8px 6px #ff1a1a, 0 0 12px 10px #333, 0 0 12px 14px #ff1a1a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 26, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 26, 26, 0);
  }
}
@keyframes r20 {
  from {
    box-shadow: 0 0 8px 6px #ff1a1a, 0 0 12px 10px #333, 0 0 12px 14px #ff1a1a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 26, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 26, 26, 0);
  }
}
.s:nth-child(2) {
  background: #33ffdd;
  -webkit-animation: r1 2s 0.25s ease-out infinite;
  -moz-animation: r1 2s 0.25s ease-out infinite;
  animation: r1 2s 0.25s ease-out infinite;
}
.s:nth-child(2):hover {
  background: #ff4733;
  -webkit-animation: r21 0.5s 0.4s ease-out infinite;
  -moz-animation: r21 0.5s 0.4s ease-out infinite;
  animation: r21 0.5s 0.4s ease-out infinite;
}

@-webkit-keyframes r1 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 217, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 255, 217, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1affd9, 0 0 12px 10px #333, 0 0 12px 14px #1affd9;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 217, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 255, 217, 0);
  }
}
@-moz-keyframes r1 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 217, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 255, 217, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1affd9, 0 0 12px 10px #333, 0 0 12px 14px #1affd9;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 217, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 255, 217, 0);
  }
}
@keyframes r1 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 217, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 255, 217, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1affd9, 0 0 12px 10px #333, 0 0 12px 14px #1affd9;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 217, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 255, 217, 0);
  }
}
@-webkit-keyframes r21 {
  from {
    box-shadow: 0 0 8px 6px #ff301a, 0 0 12px 10px #333, 0 0 12px 14px #ff301a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 48, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 48, 26, 0);
  }
}
@-moz-keyframes r21 {
  from {
    box-shadow: 0 0 8px 6px #ff301a, 0 0 12px 10px #333, 0 0 12px 14px #ff301a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 48, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 48, 26, 0);
  }
}
@keyframes r21 {
  from {
    box-shadow: 0 0 8px 6px #ff301a, 0 0 12px 10px #333, 0 0 12px 14px #ff301a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 48, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 48, 26, 0);
  }
}
.s:nth-child(3) {
  background: #33ffff;
  -webkit-animation: r2 2s 0.5s ease-out infinite;
  -moz-animation: r2 2s 0.5s ease-out infinite;
  animation: r2 2s 0.5s ease-out infinite;
}
.s:nth-child(3):hover {
  background: #ff5c33;
  -webkit-animation: r22 0.5s 0.4s ease-out infinite;
  -moz-animation: r22 0.5s 0.4s ease-out infinite;
  animation: r22 0.5s 0.4s ease-out infinite;
}

@-webkit-keyframes r2 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 255, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 255, 255, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1affff, 0 0 12px 10px #333, 0 0 12px 14px #1affff;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 255, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 255, 255, 0);
  }
}
@-moz-keyframes r2 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 255, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 255, 255, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1affff, 0 0 12px 10px #333, 0 0 12px 14px #1affff;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 255, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 255, 255, 0);
  }
}
@keyframes r2 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 255, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 255, 255, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1affff, 0 0 12px 10px #333, 0 0 12px 14px #1affff;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 255, 255, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 255, 255, 0);
  }
}
@-webkit-keyframes r22 {
  from {
    box-shadow: 0 0 8px 6px #ff471a, 0 0 12px 10px #333, 0 0 12px 14px #ff471a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 71, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 71, 26, 0);
  }
}
@-moz-keyframes r22 {
  from {
    box-shadow: 0 0 8px 6px #ff471a, 0 0 12px 10px #333, 0 0 12px 14px #ff471a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 71, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 71, 26, 0);
  }
}
@keyframes r22 {
  from {
    box-shadow: 0 0 8px 6px #ff471a, 0 0 12px 10px #333, 0 0 12px 14px #ff471a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 71, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 71, 26, 0);
  }
}
.s:nth-child(4) {
  background: #33ddff;
  -webkit-animation: r3 2s 0.75s ease-out infinite;
  -moz-animation: r3 2s 0.75s ease-out infinite;
  animation: r3 2s 0.75s ease-out infinite;
}
.s:nth-child(4):hover {
  background: #ff7033;
  -webkit-animation: r23 0.5s 0.4s ease-out infinite;
  -moz-animation: r23 0.5s 0.4s ease-out infinite;
  animation: r23 0.5s 0.4s ease-out infinite;
}

@-webkit-keyframes r3 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 217, 255, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 217, 255, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1ad9ff, 0 0 12px 10px #333, 0 0 12px 14px #1ad9ff;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 217, 255, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 217, 255, 0);
  }
}
@-moz-keyframes r3 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 217, 255, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 217, 255, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1ad9ff, 0 0 12px 10px #333, 0 0 12px 14px #1ad9ff;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 217, 255, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 217, 255, 0);
  }
}
@keyframes r3 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 217, 255, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 217, 255, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1ad9ff, 0 0 12px 10px #333, 0 0 12px 14px #1ad9ff;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 217, 255, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 217, 255, 0);
  }
}
@-webkit-keyframes r23 {
  from {
    box-shadow: 0 0 8px 6px #ff5e1a, 0 0 12px 10px #333, 0 0 12px 14px #ff5e1a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 94, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 94, 26, 0);
  }
}
@-moz-keyframes r23 {
  from {
    box-shadow: 0 0 8px 6px #ff5e1a, 0 0 12px 10px #333, 0 0 12px 14px #ff5e1a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 94, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 94, 26, 0);
  }
}
@keyframes r23 {
  from {
    box-shadow: 0 0 8px 6px #ff5e1a, 0 0 12px 10px #333, 0 0 12px 14px #ff5e1a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 94, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 94, 26, 0);
  }
}
.s:nth-child(5) {
  background: #33bbff;
  -webkit-animation: r4 2s 1s ease-out infinite;
  -moz-animation: r4 2s 1s ease-out infinite;
  animation: r4 2s 1s ease-out infinite;
}
.s:nth-child(5):hover {
  background: #ff8533;
  -webkit-animation: r24 0.5s 0.4s ease-out infinite;
  -moz-animation: r24 0.5s 0.4s ease-out infinite;
  animation: r24 0.5s 0.4s ease-out infinite;
}

@-webkit-keyframes r4 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 179, 255, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 179, 255, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1ab3ff, 0 0 12px 10px #333, 0 0 12px 14px #1ab3ff;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 179, 255, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 179, 255, 0);
  }
}
@-moz-keyframes r4 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 179, 255, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 179, 255, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1ab3ff, 0 0 12px 10px #333, 0 0 12px 14px #1ab3ff;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 179, 255, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 179, 255, 0);
  }
}
@keyframes r4 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 179, 255, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 179, 255, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1ab3ff, 0 0 12px 10px #333, 0 0 12px 14px #1ab3ff;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 179, 255, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 179, 255, 0);
  }
}
@-webkit-keyframes r24 {
  from {
    box-shadow: 0 0 8px 6px #ff751a, 0 0 12px 10px #333, 0 0 12px 14px #ff751a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 117, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 117, 26, 0);
  }
}
@-moz-keyframes r24 {
  from {
    box-shadow: 0 0 8px 6px #ff751a, 0 0 12px 10px #333, 0 0 12px 14px #ff751a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 117, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 117, 26, 0);
  }
}
@keyframes r24 {
  from {
    box-shadow: 0 0 8px 6px #ff751a, 0 0 12px 10px #333, 0 0 12px 14px #ff751a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 117, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 117, 26, 0);
  }
}
.s:nth-child(6) {
  background: #3399ff;
  -webkit-animation: r5 2s 1.25s ease-out infinite;
  -moz-animation: r5 2s 1.25s ease-out infinite;
  animation: r5 2s 1.25s ease-out infinite;
}
.s:nth-child(6):hover {
  background: #ff9933;
  -webkit-animation: r25 0.5s 0.4s ease-out infinite;
  -moz-animation: r25 0.5s 0.4s ease-out infinite;
  animation: r25 0.5s 0.4s ease-out infinite;
}

@-webkit-keyframes r5 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 140, 255, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 140, 255, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1a8cff, 0 0 12px 10px #333, 0 0 12px 14px #1a8cff;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 140, 255, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 140, 255, 0);
  }
}
@-moz-keyframes r5 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 140, 255, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 140, 255, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1a8cff, 0 0 12px 10px #333, 0 0 12px 14px #1a8cff;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 140, 255, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 140, 255, 0);
  }
}
@keyframes r5 {
  0% {
    box-shadow: 0 0 8px 6px rgba(26, 140, 255, 0), 0 0 0px 0px #333, 0 0 0px 0px rgba(26, 140, 255, 0);
  }
  10% {
    box-shadow: 0 0 8px 6px #1a8cff, 0 0 12px 10px #333, 0 0 12px 14px #1a8cff;
  }
  100% {
    box-shadow: 0 0 8px 6px rgba(26, 140, 255, 0), 0 0 0px 40px #333, 0 0 0px 40px rgba(26, 140, 255, 0);
  }
}
@-webkit-keyframes r25 {
  from {
    box-shadow: 0 0 8px 6px #ff8c1a, 0 0 12px 10px #333, 0 0 12px 14px #ff8c1a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 140, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 140, 26, 0);
  }
}
@-moz-keyframes r25 {
  from {
    box-shadow: 0 0 8px 6px #ff8c1a, 0 0 12px 10px #333, 0 0 12px 14px #ff8c1a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 140, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 140, 26, 0);
  }
}
@keyframes r25 {
  from {
    box-shadow: 0 0 8px 6px #ff8c1a, 0 0 12px 10px #333, 0 0 12px 14px #ff8c1a;
  }
  to {
    box-shadow: 0 0 8px 6px rgba(255, 140, 26, 0), 0 0 4px 40px #333, 0 0 4px 41px rgba(255, 140, 26, 0);
  }
}

@import "bourbon";

$n:6;
$w:20px;//dot size
$e:4;//dot margin factor
$hsl:160;//start color
$bg:#333;

html{
	background:$bg;
	overflow:hidden;
}	

#c{
	position: absolute;
	top:50%;
	left:50%;	
	margin-left: -(($n - 1)*($w + $w*$e))/2 - ($w/2);
}

@mixin shadow($b,$s,$sm,$c){
	box-shadow:
		0 0 8px 6px $c,
		0 0 $b $s $bg,
		0 0 $b ($s + $sm) $c;
}

.s{
	width: $w;
	height: $w;
	border-radius: 50%;
	cursor:pointer;
	float: left;
  @include transition(all .2s);
	&:nth-child(n+2){
		margin-left: $w*$e;
	}
}	
	
@for $i from 0 to $n {
	$c:hsl($hsl+(10*$i),100%,55%);
  $c2:hsl((6*$i),100%,55%);
	
	.s:nth-child(#{$i+1}){			
		background: lighten($c,5%);	
		@include animation(r+$i 2s ($i/4)+s ease-out  infinite);		 &:hover{
      background: lighten($c2,5%);      
      @include animation(r2+$i .5s .4s  ease-out  infinite);
    }
	}
	@include keyframes(r+$i) {
    0%{@include shadow(0px,0px,0px,rgba($c,0));}
		10%{@include shadow(12px,10px,4px,$c);}
		100%{@include shadow(0px,40px,0px,rgba($c,0));}
	}
  @include keyframes(r2+$i) {
		from{@include shadow(12px,10px,4px,$c2);}
		to{@include shadow(4px,40px,1px,rgba($c2,0));}
	}
}
</style>
<body>
<div id='c'>
  <div class='s'></div>
  <div class='s'></div>
  <div class='s'></div>
  <div class='s'></div>
  <div class='s'></div>
  <div class='s'></div>
</div>
</body>
<h1> <center> 

<?php

$con = mysqli_connect("localhost","root","","form");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if (isset($_POST['Register']))
{

$firstname=mysqli_real_escape_string($con,$_REQUEST['fname']);
$lastname=mysqli_real_escape_string($con,$_REQUEST['last_name']);
$username=mysqli_real_escape_string($con,$_REQUEST['uname']);
$emailaddress=mysqli_real_escape_string($con,$_REQUEST['email']);
$passwrd=mysqli_real_escape_string($con,$_REQUEST['psw']);
$query1 = "SELECT * FROM `login` WHERE email='$emailaddress'";
$result1 = mysqli_query($con,$query1);
        if($result1){
            echo '<i style="color:CYAN;font-size:60px;font-family:COMIC SANS MS ;">Already Registered!</i>' ;
        }
    }
    else{  
    $query = "INSERT into `login`(firstname, lastname, username, email,password)
VALUES('$firstname','$lastname','$username','$emailaddress','$passwrd')";
        $result = mysqli_query($con,$query);
        if($result){
            echo '<i style="color:CYAN;font-size:60px;font-family:COMIC SANS MS ;">
      "THANK YOU FOR REGISTERING!!!!!!!!!! ENJOY SHOPPING...." </i> ' ;
        }
    else{echo "sry";}
  }
?>
</body> </center>
</h1>
</head>
</html>