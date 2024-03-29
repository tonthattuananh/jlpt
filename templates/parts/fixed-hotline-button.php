<div class="fix_tel">
	<div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon" style="left:0;bottom:0">
		<div class="ring-alo-ph-circle"></div>
		<div class="ring-alo-ph-circle-fill"></div>
		<div class="ring-alo-ph-img-circle">
			<a href="tel:<?php theOption('dien_thoai') ?>"><i class="fa fa-phone" aria-hidden="true" style="font-size:22px;color:#fff;margin: 3px;"></i></a>
		</div>
	</div>
	<a href="tel:<?php theOption('dien_thoai') ?>">
		<div class="tel">
			<p class="fone"><?php theOption('dien_thoai') ?></p>
		</div>
	</a>
</div>

<div class="chat-zalo">
	<a target="_blank" href="https://zalo.me/<?php theOption('zalo') ?>">CHAT ZALO</a>
</div>

<style>
	.chat-zalo
	{
		position         : fixed;
		bottom           : 105px;
		left             : 15px;
		z-index          : 9999;
		background-color : #0573ff;
		padding          : 2px 15px;
		border-radius    : 15px;
	}

	.chat-zalo a
	{
		color       : #ffffff;
		font-weight : bold;
	}
	
	.fix_tel
	{
		position : fixed;
		bottom   : 15px;
		left     : 0;
		z-index  : 9999;
	}

	.fix_tel a
	{
		text-decoration : none;
	}

	.tel
	{
		background      : #eee;
		width           : 185px;
		height          : 40px;
		overflow        : hidden;
		background-size : 40px;
		border-radius   : 20px;
		border          : solid 1px #ccc;
		position        : absolute;
		top             : 25%;
		left            : 25%;
		padding-right   : 10px;
	}

	a:hover > .tel
	{ /*background: #158900;*/
	}

	.bor-left, .bor-top, .bor-right, .bor-bottom
	{
		position           : absolute;
		background-color   : #158900;
		-webkit-transition : all 5s ease-in-out;
		transition         : all 5s ease-in-out;
	}

	.bor-left
	{
		height            : 50%;
		width             : 3px;
		left              : 0;
		bottom            : -100%;
		-webkit-animation : transtop 5s ease-in-out infinite;
		animation         : transtop 5s ease-in-out infinite;
	}

	.bor-right
	{
		height            : 50%;
		right             : 0;
		top               : -100%;
		width             : 3px;
		-webkit-animation : transbot 5s ease-in-outinfinite;
		animation         : transbot 5s ease-in-outinfinite;
	}

	.bor-top
	{
		width             : 50%;
		left              : -100%;
		top               : 0;
		height            : 3px;
		-webkit-animation : transleft 5s ease-in-out infinite;
		animation         : transleft 5s ease-in-out infinite;
	}

	.bor-bottom
	{
		width             : 50%;
		height            : 3px;
		right             : -100%;
		bottom            : 0;
		-webkit-animation : transright 5s ease-in-out infinite;
		animation         : transright 5s ease-in-out infinite;
	}

	.fone
	{
		font-size    : 20px;
		text-align   : right;
		color        : #BE1F2E;
		line-height  : 38px;
		font-weight  : bold;
		padding-left : 45px;
	}

	a:hover > .tel > .fone
	{ /* color: white;*/
	}

	.ring-alo-phone
	{
		background-color   : transparent;
		cursor             : pointer;
		height             : 80px;
		position           : relative;
		-webkit-transition : visibility 0.5s ease 0s;
		transition         : visibility 0.5s ease 0s;
		visibility         : hidden;
		width              : 80px;
		z-index            : 200000 !important;
	}

	.ring-alo-phone.ring-alo-show
	{
		visibility : visible;
	}

	.ring-alo-phone.ring-alo-hover, .ring-alo-phone:hover
	{
		opacity : 1;
	}

	.ring-alo-ph-circle
	{
		-webkit-animation        : 1.2s ease-in-out 0s normal none infinite running ring-alo-circle-anim;
		animation                : 1.2s ease-in-out 0s normal none infinite running ring-alo-circle-anim;
		background-color         : transparent;
		border                   : 2px solid rgba(30, 30, 30, 0.4);
		border-radius            : 100%;
		height                   : 100%;
		left                     : 0;
		opacity                  : 0.1;
		position                 : absolute;
		top                      : 0;
		-webkit-transform-origin : 50% 50% 0;
		transform-origin         : 50% 50% 0;
		-webkit-transition       : all 0.5s ease 0s;
		transition               : all 0.5s ease 0s;
		width                    : 100%;
	}

	.ring-alo-phone.ring-alo-active .ring-alo-ph-circle
	{
		-webkit-animation : 1.1s ease-in-out 0s normal none infinite running ring-alo-circle-anim !important;
		animation         : 1.1s ease-in-out 0s normal none infinite running ring-alo-circle-anim !important;
	}

	.ring-alo-phone.ring-alo-static .ring-alo-ph-circle
	{
		-webkit-animation : 2.2s ease-in-out 0s normal none infinite running ring-alo-circle-anim !important;
		animation         : 2.2s ease-in-out 0s normal none infinite running ring-alo-circle-anim !important;
	}

	.ring-alo-phone.ring-alo-hover .ring-alo-ph-circle, .ring-alo-phone:hover .ring-alo-ph-circle
	{
		border-color : #f00;
		opacity      : 0.5;
	}

	.ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-circle, .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-circle
	{
		border-color : #5E0A10;
		opacity      : 0.5;
	}

	.ring-alo-phone.ring-alo-green .ring-alo-ph-circle
	{
		border-color : #BE1F2E;
		opacity      : 0.5;
	}

	.ring-alo-ph-circle-fill
	{
		-webkit-animation        : 2.3s ease-in-out 0s normal none infinite running ring-alo-circle-fill-anim;
		animation                : 2.3s ease-in-out 0s normal none infinite running ring-alo-circle-fill-anim;
		background-color         : #000;
		border                   : 2px solid transparent;
		border-radius            : 100%;
		height                   : 100%;
		left                     : 0;
		opacity                  : 0.1;
		position                 : absolute;
		top                      : 0;
		-webkit-transform-origin : 50% 50% 0;
		transform-origin         : 50% 50% 0;
		-webkit-transition       : all 0.5s ease 0s;
		transition               : all 0.5s ease 0s;
		width                    : 100%;
	}

	.ring-alo-phone.ring-alo-hover .ring-alo-ph-circle-fill, .ring-alo-phone:hover .ring-alo-ph-circle-fill
	{
		background-color : rgba(0, 175, 242, 0.5);
		opacity          : 0.75 !important;
	}

	.ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-circle-fill, .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-circle-fill
	{
		background-color : #5E0A10;
		opacity          : 0.75 !important;
	}

	.ring-alo-phone.ring-alo-green .ring-alo-ph-circle-fill
	{
		background-color : #BE1F2E;
		opacity          : 0.75 !important;
	}

	.ring-alo-ph-img-circle
	{
		-webkit-animation        : 1s ease-in-out 0s normal none infinite running ring-alo-circle-img-anim;
		animation                : 1s ease-in-out 0s normal none infinite running ring-alo-circle-img-anim;
		border                   : 2px solid transparent;
		border-radius            : 100%;
		height                   : 50%;
		left                     : 25%;
		opacity                  : 1;
		position                 : absolute;
		top                      : 25%;
		-webkit-transform-origin : 50% 50% 0;
		transform-origin         : 50% 50% 0;
		width                    : 50%;
		display                  : flex;
		justify-content          : center;
		-webkit-justify-content  : center;
		align-items              : center;
	}

	.ring-alo-phone.ring-alo-hover .ring-alo-ph-img-circle, .ring-alo-phone:hover .ring-alo-ph-img-circle
	{
		background-color : #f00;
	}

	.ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-img-circle, .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-img-circle
	{
		background-color : #5E0A10;
	}

	.ring-alo-phone.ring-alo-green .ring-alo-ph-img-circle
	{
		background-color : #BE1F2E;
	}

	@-webkit-keyframes ring-alo-circle-anim
	{
		0%
		{
			opacity           : 0.1;
			-webkit-transform : rotate(0deg) scale(0.5) skew(1deg);
			transform         : rotate(0deg) scale(0.5) skew(1deg);
		}
		30%
		{
			opacity           : 0.5;
			-webkit-transform : rotate(0deg) scale(0.7) skew(1deg);
			transform         : rotate(0deg) scale(0.7) skew(1deg);
		}
		100%
		{
			opacity           : 0.6;
			-webkit-transform : rotate(0deg) scale(1) skew(1deg);
			transform         : rotate(0deg) scale(1) skew(1deg);
		}
	}

	@keyframes ring-alo-circle-anim
	{
		0%
		{
			opacity           : 0.1;
			-webkit-transform : rotate(0deg) scale(0.5) skew(1deg);
			transform         : rotate(0deg) scale(0.5) skew(1deg);
		}
		30%
		{
			opacity           : 0.5;
			-webkit-transform : rotate(0deg) scale(0.7) skew(1deg);
			transform         : rotate(0deg) scale(0.7) skew(1deg);
		}
		100%
		{
			opacity           : 0.6;
			-webkit-transform : rotate(0deg) scale(1) skew(1deg);
			transform         : rotate(0deg) scale(1) skew(1deg);
		}
	}

	@-webkit-keyframes ring-alo-circle-img-anim
	{
		0%
		{
			-webkit-transform : rotate(0deg) scale(1) skew(1deg);
			transform         : rotate(0deg) scale(1) skew(1deg);
		}
		10%
		{
			-webkit-transform : rotate(-25deg) scale(1) skew(1deg);
			transform         : rotate(-25deg) scale(1) skew(1deg);
		}
		20%
		{
			-webkit-transform : rotate(25deg) scale(1) skew(1deg);
			transform         : rotate(25deg) scale(1) skew(1deg);
		}
		30%
		{
			-webkit-transform : rotate(-25deg) scale(1) skew(1deg);
			transform         : rotate(-25deg) scale(1) skew(1deg);
		}
		40%
		{
			-webkit-transform : rotate(25deg) scale(1) skew(1deg);
			transform         : rotate(25deg) scale(1) skew(1deg);
		}
		50%
		{
			-webkit-transform : rotate(0deg) scale(1) skew(1deg);
			transform         : rotate(0deg) scale(1) skew(1deg);
		}
		100%
		{
			-webkit-transform : rotate(0deg) scale(1) skew(1deg);
			transform         : rotate(0deg) scale(1) skew(1deg);
		}
	}

	@keyframes ring-alo-circle-img-anim
	{
		0%
		{
			-webkit-transform : rotate(0deg) scale(1) skew(1deg);
			transform         : rotate(0deg) scale(1) skew(1deg);
		}
		10%
		{
			-webkit-transform : rotate(-25deg) scale(1) skew(1deg);
			transform         : rotate(-25deg) scale(1) skew(1deg);
		}
		20%
		{
			-webkit-transform : rotate(25deg) scale(1) skew(1deg);
			transform         : rotate(25deg) scale(1) skew(1deg);
		}
		30%
		{
			-webkit-transform : rotate(-25deg) scale(1) skew(1deg);
			transform         : rotate(-25deg) scale(1) skew(1deg);
		}
		40%
		{
			-webkit-transform : rotate(25deg) scale(1) skew(1deg);
			transform         : rotate(25deg) scale(1) skew(1deg);
		}
		50%
		{
			-webkit-transform : rotate(0deg) scale(1) skew(1deg);
			transform         : rotate(0deg) scale(1) skew(1deg);
		}
		100%
		{
			-webkit-transform : rotate(0deg) scale(1) skew(1deg);
			transform         : rotate(0deg) scale(1) skew(1deg);
		}
	}

	@-webkit-keyframes ring-alo-circle-fill-anim
	{
		0%
		{
			opacity           : 0.2;
			-webkit-transform : rotate(0deg) scale(0.7) skew(1deg);
			transform         : rotate(0deg) scale(0.7) skew(1deg);
		}
		50%
		{
			opacity           : 0.2;
			-webkit-transform : rotate(0deg) scale(1) skew(1deg);
			transform         : rotate(0deg) scale(1) skew(1deg);
		}
		100%
		{
			opacity           : 0.2;
			-webkit-transform : rotate(0deg) scale(0.7) skew(1deg);
			transform         : rotate(0deg) scale(0.7) skew(1deg);
		}
	}

	@keyframes ring-alo-circle-fill-anim
	{
		0%
		{
			opacity           : 0.2;
			-webkit-transform : rotate(0deg) scale(0.7) skew(1deg);
			transform         : rotate(0deg) scale(0.7) skew(1deg);
		}
		50%
		{
			opacity           : 0.2;
			-webkit-transform : rotate(0deg) scale(1) skew(1deg);
			transform         : rotate(0deg) scale(1) skew(1deg);
		}
		100%
		{
			opacity           : 0.2;
			-webkit-transform : rotate(0deg) scale(0.7) skew(1deg);
			transform         : rotate(0deg) scale(0.7) skew(1deg);
		}
	}

	/*Icon Call End*/
	@media screen and (max-width : 767px)
	{
		.ring-alo-phone
		{
			height : 60px;
			width  : 60px;
		}

		.tel
		{
			height : 30px;
		}

		.fone
		{
			font-size   : 18px;
			line-height : 28px;
		}
	}
</style>