<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<html>
<head>
<title>인덕닷컴 쇼핑몰</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link href="include/font.css" rel="stylesheet" type="text/css">
<script language="Javascript" src="include/common.js"></script>
</head>

<body style="margin:0">
<center>

<?php 
	include "main_top.php";
?>

<!--  Category 메뉴 : 가로형인 경우  --------------------------------------
<table width="959" height="25" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td align="left" bgcolor="#F7F7F7">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><a href="product.html?no=1"><img src="images/main_menu01_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=2"><img src="images/main_menu02_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=3"><img src="images/main_menu03_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=4"><img src="images/main_menu04_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=5"><img src="images/main_menu05_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=6"><img src="images/main_menu06_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=7"><img src="images/main_menu07_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=8"><img src="images/main_menu08_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=9"><img src="images/main_menu09_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.html?no=10"><img src="images/main_menu10_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
------------------------------------------------------------------------>


<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->	

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30"><img src="images/Help_title.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td><img src="images/policy_title1.gif" border="0"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			<table width="700" border="0" cellpadding="0" cellspacing="0" class="cmfont">
			    <tr>
					<td width="30" align="center" valign="top"><font color="#8B9CBF"><b>(1)</b></font></td>
					<td width="670" align="left" valign="top">
	    			  인덕닷컴은 개인정보를 개인의 동의없이 수집하지 않습니다. 인덕닷컴의 개인정보보호정책 또는 이용약관의 내용에 대해 「동의합니다」버튼 또는 「동의하지 않습니다」버튼을 클릭할 수 있는 절차를 마련하여, 「동의합니다」버튼을 클릭하면 개인정보수집에 대해 동의한 것으로 봅니다.
					</td>
			    </tr>
			    <tr><td width="700" height="20" colspan="2"></td></tr>
			    <tr>
					<td width="30" align="center" valign="top"><font color="#8B9CBF"><b>(2)</b></font></td>
					<td width="670" align="left" valign="top">
						<font color="#8B9CBF"><b>개인정보 수집 목적 및 이용</b></font><br><br>
						인덕닷컴은 회원님께서 인덕닷컴의 재화 혹은 용역을 주문하거나 각종 서비스를 이용하는데 있어, 원활한 주문 및 서비스 접수,물품 배송,대금 결제 및 회원님에게 편리하고 유익한 맞춤정보를 제공하기 위한 최소한의 정보를 필수 사항으로 수집합니다.<br><br>
						회원님께서 제공하신 모든 정보는 상기 목적에 필요한 용도 이외로는 사용되지 않으며, 수집 정보의 범위나 사용 목적, 용도가 변경될 시에는 반드시 회원님께 사전 동의를 구할 것입니다.<br>
					</td>
			    </tr>
			    <tr><td width="700" height="20" colspan="2"></td></tr>
			    <tr>
					<td width="30" align="center" valign="top"></td>
					<td width="670" align="left" valign="top">
						. . .<br>
					</td>
			    </tr>
			    <tr><td width="700" height="20" colspan="2"></td></tr>
			    <tr>
					<td width="30" align="center" valign="top"><font color="#8B9CBF"><b>(?)</b></font></td>
					<td width="670" align="left" valign="top">
						<font color="#8B9CBF"><b>고객개인정보 관리 책임자</b></font><br><br>
						인덕닷컴은 정보통신부 지정 개인정보지침에 의거 관리책임자를 아래와 같이 지정합니다.<br><br><br>
						사업자등록번호 : 000-00-00000<br><br>
						고객센터 TEL : 02-000-0000<br>
						개인정보 책임자 : 홍길동<br>
						소재지 : 서울시 노원구 월계4동 산76 인덕닷컴<br><br><br>
						인덕닷컴 이용 중 피해 사항 신고는 '한국소비자보호원'(http://www.cpb.or.kr) 에서 하실 수 있으며, <br>
						개인정보침해에 관련된 신고는 개인정보침해신고센터(http://www.cyberprivacy.or.kr)에서 하실 수 있습니다.<br>
					</td>
			    </tr>
			    <tr><td width="700" height="20" colspan="2"></td></tr>
			</table>

<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
<!-------------------------------------------------------------------------------------------->	

		</td>
	</tr>
</table>


<!-- 화면 하단 부분 : 회사정보/회사소개/이용정보/개인보호정책 ... ---------------------------->
<br><br>
<?php
	include "main_bottom.php";
?>
&nbsp
</center>

</body>
</html>