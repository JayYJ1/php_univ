<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 php)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?php
	include "main_top.php"
?>
<php>
<head>
<title>BTB</title>
<meta http-equiv="content-type" content="text/php; charset=utf-8">
<link href="include/font.css" rel="stylesheet" type="text/css">
<script language="Javascript" src="include/common.js"></script>
</head>
<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->	

			<!--  현재 페이지 자바스크립  -------------------------------------------->
			<script language="javascript">

			function Check_Value() {
				if (!form2.o_name.value) {
					alert("주문자 이름이 잘 못 되었습니다.");	form2.o_name.focus();	return;
				}
				if (!form2.o_tel1.value || !form2.o_tel2.value || !form2.o_tel3.value) {
					alert("전화번호가 잘 못 되었습니다.");	form2.o_tel1.focus();	return;
				}
				if (!form2.o_phone1.value || !form2.o_phone2.value || !form2.o_phone3.value) {
					alert("핸드폰이 잘 못 되었습니다.");	form2.o_phone1.focus();	return;
				}
				if (!form2.o_email.value) {
					alert("이메일이 잘 못 되었습니다.");	form2.o_email.focus();	return;
				}
				if (!form2.o_zip.value) {
					alert("우편번호가 잘 못 되었습니다.");	form2.o_zip.focus();	return;
				}
				if (!form2.o_juso.value) {
					alert("주소가 잘 못 되었습니다.");	form2.o_juso.focus();	return;
				}

				if (!form2.r_name.value) {
					alert("받으실 분의 이름이 잘 못 되었습니다.");	form2.r_name.focus();	return;
				}
				if (!form2.r_tel1.value || !form2.r_tel2.value || !form2.r_tel3.value) {
					alert("전화번호가 잘 못 되었습니다.");	form2.r_tel1.focus();	return;
				}
				if (!form2.r_phone1.value || !form2.r_phone2.value || !form2.r_phone3.value) {
					alert("핸드폰이 잘 못 되었습니다.");	form2.r_phone1.focus();	return;
				}
				if (!form2.r_email.value) {
					alert("이메일이 잘 못 되었습니다.");	form2.r_email.focus();	return;
				}
				if (!form2.r_zip.value) {
					alert("우편번호가 잘 못 되었습니다.");	form2.r_zip.focus();	return;
				}
				if (!form2.r_juso.value) {
					alert("주소가 잘 못 되었습니다.");	form2.r_juso.focus();	return;
				}

				form2.submit();
			}

			function FindZip(zip_kind) 
			{
				window.open("zipcode.php?zip_kind="+zip_kind, "", "scrollbars=no,width=500,height=250");
			}

			function SameCopy(str) {
				if (str == "Y") {
					form2.r_name.value = form2.o_name.value;
					form2.r_zip.value = form2.o_zip.value;
					form2.r_juso.value = form2.o_juso.value;
					form2.r_tel1.value = form2.o_tel1.value;
					form2.r_tel2.value = form2.o_tel2.value;
					form2.r_tel3.value = form2.o_tel3.value;
					form2.r_phone1.value = form2.o_phone1.value;
					form2.r_phone2.value = form2.o_phone2.value;
					form2.r_phone3.value = form2.o_phone3.value;
					form2.r_email.value = form2.o_email.value;
				}
				else {
					form2.r_name.value = "";
					form2.r_zip.value = "";
					form2.r_juso.value = "";
					form2.r_tel1.value = "";
					form2.r_tel2.value = "";
					form2.r_tel3.value = "";
					form2.r_phone1.value = "";
					form2.r_phone2.value = "";
					form2.r_phone3.value = "";
					form2.r_email.value = "";
				}
			}

			</script>

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center"><img src="images/jumun_title.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="710">
				<tr>
					<td><img src="images/order_title1.gif" width="65" height="15" border="0"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			<table border="0" cellpadding="5" cellspacing="1" width="710" class="cmfont" bgcolor="#CCCCCC">
				<tr bgcolor="F0F0F0" height="23" class="cmfont">
					<td width="440" align="center">상품</td>
					<td width="70"  align="center">수량</td>
					<td width="100" align="center">가격</td>
					<td width="100" align="center">합계</td>
								<?php
				$total=0;
				if(!$n_cart) $n_cart=0;
				for($i=1;$i<=$n_cart;$i++){
					if($cart[$i]){
						list($no, $num, $opts1, $opts2)=explode("^", $cart[$i]);
						$query="select *from product where no37=$no";
						$result=mysqli_query($db,$query);
						$row=mysqli_fetch_array($result);

						$query="select *from opts where no37=$opts1";
						$result=mysqli_query($db,$query);
						$row1=mysqli_fetch_array($result);
						

						$query="select *from opts where no37=$opts2";
						$result=mysqli_query($db,$query);
						$row2=mysqli_fetch_array($result);

						$p=$row['price37'];
						$ph=$p*$num;
						$sp=round($row['price37']*(100-$row['discount37'])/100,-3);
						$sph=$sp*$num;
						$p1=number_format($p);
						$ph1=number_format($ph);
						$sp1=number_format($sp);
						$sph1=number_format($sph);

						echo("
								<tr>
									<td height='60' align='center' bgcolor='#FFFFFF'>
										<table cellpadding='0' cellspacing='0' width='100%'>
											<tr>
												<td width='60'>
													<a href='product_detail.php?no=$no'><img src='product/$row[image1_37]' width='50' height='50' border='0'></a>
												</td>
												<td class='cmfont'>
													<a href='product_detail.php?no=$no'>$row[name37]</a><br>
													<font color='#0066CC'>[옵션사항]</font> $row1[name37] $row2[name37]
												</td>
											</tr>
										</table>
									</td>
									
										<td align='center' bgcolor='#FFFFFF'><font color='#464646'>$num&nbsp개</font></td>
									");
									if($row['icon_sale37']==1){
									echo("<td align='center' bgcolor='#FFFFFF'><font color='#464646'>$sp1</font></td>
											<td align='center' bgcolor='#FFFFFF'><font color='#464646'>$sph1</font></td>");
										$total=$total+$sph;
										$s=$s+$sph;
									}
									else{
									echo("<td align='center' bgcolor='#FFFFFF'><font color='#464646'>$p1</font></td>
											<td align='center' bgcolor='#FFFFFF'><font color='#464646'>$ph1</font></td>");
										$total=$total+$ph;
										$s=$s+$ph;
									}
								echo("</tr>");
								}
								}
								echo("
								<tr>
									<td colspan='5' bgcolor='#F0F0F0'>
										<table width='100%' border='0' cellpadding='0' cellspacing='0' class='cmfont'>
											<tr>
												<td bgcolor='#F0F0F0'><img src='images/cart_image1.gif' border='0'></td>
												<td align='right' bgcolor='#F0F0F0'>");
												if($total < $max_baesongbi){ $total=$total+$baesongbi;
													$s=number_format($s);
													$total=number_format($total);
													$baesongbi=number_format($baesongbi);
											echo("<font color='#0066CC'><b>총 합계금액</font></b> : 상품대금($s 원) + 배송료($baesongbi 원) = <font color='#FF3333'><b>$total</b></font>&nbsp;&nbsp");}
												else{
													$s=number_format($s);
													$total=number_format($total);
											echo("<font color='#0066CC'><b>총 합계금액</font></b> : 상품대금($s 원) = <font color='#FF3333'><b>$total</b></font>&nbsp;&nbsp");}
										echo("</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>");?>
			<br><br>
			<?php
				$o_no="0";
				$o_name="";
				$o_tel1="";
				$o_tel2="";
				$o_tel3="";
				$o_phone1="";
				$o_phone2="";
				$o_phone3="";
				$o_email="";
				$o_zip="";
				$o_juso="";

				if($cookie_no){
					$query="select *from member where no37=$cookie_no";
					$result=mysqli_query($db,$query);
					$row=mysqli_fetch_array($result);

					$tel1=trim(substr($row['tel37'],0,3));
					$tel2=trim(substr($row['tel37'],3,4));
					$tel3=trim(substr($row['tel37'],7,4));
					$phone1=trim(substr($row['phone37'],0,3));
					$phone2=trim(substr($row['phone37'],3,4));
					$phone3=trim(substr($row['phone37'],7,4));

					$o_no=$row['no37'];
					$o_name=$row['name37'];
					$o_tel1=$tel1;
					$o_tel2=$tel2;
					$o_tel3=$tel3;
					$o_phone1=$phone1;
					$o_phone2=$phone2;
					$o_phone3=$phone3;
					$o_email=$row['email37'];
					$o_zip=$row['zip37'];
					$o_juso=$row['juso37'];
				}
			?>
			<br><br>

			<!-- 주문자 정보 -->
			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="3" bgcolor="#CCCCCC"><td></td></tr>
			</table>

			<!-- form2 시작  -->
			<form name="form2" method="post" action="order_pay.php">
			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr>
					<td align="left" valign="top" width="150" STYLE="padding-left:45;padding-top:5">
						<font size="2" color="#B90319"><b>주문자 정보</b></font>
					</td>
					<td align="center" width="560">

						<table width="560" border="0" cellpadding="0" cellspacing="0" class="cmfont">
							<tr height="25">
								<td width="150"><b>주문자 성명</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="hidden" name="o_no" value="">
									<input type="text"   name="o_name" size="20" maxlength="10" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>전화번호</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="text" name="o_tel1" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="o_tel2" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="o_tel3" size="4" maxlength="4" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>휴대폰번호</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="text" name="o_phone1" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="o_phone2" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="o_phone3" size="4" maxlength="4" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>E-Mail</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="text" name="o_email" size="50" maxlength="50" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="50">
								<td width="150"><b>주소</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="text" name="o_zip" size="5" maxlength="5" value="" class="cmfont1"> 
									<a href="javascript:FindZip(1)"><img src="images/b_zip.gif" align="absmiddle" border="0"></a> <br>
									<input type="text" name="o_juso" size="55" maxlength="200" value="" class="cmfont1"><br>
								</td>
							</tr>
						</table>

					</td>
				</tr>
				<tr height="10"><td></td></tr>
			</table>

			<!-- 배송지 정보 -->
			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="3" bgcolor="#CCCCCC"><td></td></tr>
				<tr height="10"><td></td></tr>
			</table>

			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr>
					<td align="left" valign="top" width="150" STYLE="padding-left:45;padding-top:5"><font size=2 color="#B90319"><b>배송지 정보</b></font></td>
					<td align="center" width="560">

						<table width="560" border="0" cellpadding="0" cellspacing="0" class="cmfont">
							<tr height="25">
								<td width="150"><b>주문자정보와 동일</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="radio" name="same" onclick="SameCopy('Y')">예 &nbsp;
									<input type="radio" name="same" onclick="SameCopy('N')">아니오
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>받으실 분 성명</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="text" name="r_name" size="20" maxlength="10" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>전화번호</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="text" name="r_tel1" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="r_tel2" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="r_tel3" size="4" maxlength="4" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>휴대폰번호</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="text" name="r_phone1" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="r_phone2" size="4" maxlength="4" value="" class="cmfont1"> -
									<input type="text" name="r_phone3" size="4" maxlength="4" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="25">
								<td width="150"><b>E-Mail</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="text" name="r_email" size="50" maxlength="50" value="" class="cmfont1">
								</td>
							</tr>
							<tr height="50">
								<td width="150"><b>주소</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<input type="text" name="r_zip" size="5" maxlength="5" value="" class="cmfont1"> 
									<a href="javascript:FindZip(2)"><img src="images/b_zip.gif" align="absmiddle" border="0"></a> <br>
									<input type="text" name="r_juso" size="55" maxlength="200" value="" class="cmfont1"><br>
								</td>
							</tr>
							<tr height="50">
								<td width="150"><b>배송시요구사항</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<textarea name="memo" cols="60" rows="3" class="cmfont1"></textarea>
								</td>
							</tr>
						</table>

					</td>
				</tr>
				<tr height="10"><td></td></tr>
			</table>

			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="3" bgcolor="#CCCCCC"><td></td></tr>
				<tr height="10"><td></td></tr>
			</table>

			</form>

			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr>
					<td align="center">
						<img src="images/b_order4.gif" onclick="Check_Value()" style="cursor:hand">

					</td>
				</tr>
				<tr height="20"><td></td></tr>
			</table>

<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         
<!-------------------------------------------------------------------------------------------->	
<?php
	include "main_bottom.php"
?>

		</td>
	</tr>
</table>
</center>

</body>
</php>
<!-- <body style="margin:0"> -->
<!-- <center> -->
<!--  -->
<!-- <table width="959" border="0" cellspacing="0" cellpadding="0" align="center"> -->
<!-- 	<tr>  -->
<!-- 		<td> -->
<!-- 			<!--  상단 왼쪽 로고  -------------------------------------------->  
<!-- 			<table border="0" cellspacing="0" cellpadding="0" width="182"> -->
<!-- 				<tr> -->
<!-- 					<td><a href="index.php"><img src="images/top_logo.gif" width="182" height="30" border="0"></a></td> -->
<!-- 				</tr> -->
<!-- 			</table> -->
<!-- 		</td> -->
<!-- 		<td align="right" valign="bottom"> -->
<!-- 			<!--  상단메뉴 Home/로그인/회원가입/장바구니/주문배송조회/즐겨찾기추가  ---->	  
<!-- 			<table border="0" cellspacing="0" cellpadding="0"> -->
<!-- 				<tr> -->
<!-- 					<td><a href="index.php"><img src="images/top_menu01.gif" border="0"></a></td> -->
<!-- 					<td><img src="images/top_menu_line.gif" width="11"></td> -->
<!-- 					<td><a href="member_login.php"><img src="images/top_menu02.gif" border="0"></a></td> -->
<!-- 					<td><img src="images/top_menu_line.gif" width="11"></td> -->
<!-- 					<td><a href="member_agree.php"><img src="images/top_menu03.gif" border="0"></a></td> -->
<!-- 					<td><img src="images/top_menu_line.gif" width="11"></td> -->
<!-- 					<td><a href="cart.php"><img src="images/top_menu05.gif" border="0"></a></td> -->
<!-- 					<td><img src="images/top_menu_line.gif" width="11"></td> -->
<!-- 					<td><a href="jumun_login.php"><img src="images/top_menu06.gif" border="0"></a></td> -->
<!-- 					<td><img src="images/top_menu_line.gif"width="11"></td> -->
<!-- 					<td><img src="images/top_menu08.gif" onclick="javascript:Add_Site();" style="cursor:hand"></td> -->
<!-- 				</tr> -->
<!-- 			</table> -->
<!-- 		</td> -->
<!-- 	</tr> -->
<!-- </table> -->
<!--  -->
<!-- <!--  메인 이미지 --------------------------------------------------->  
<!-- <table width="959" border="0" cellspacing="0" cellpadding="0" align="center"> 
<!-- 	<tr> -->
<!-- 		<td><a href="main.php"><img src="images/main_image0.jpg" width="959" height="175" border="0"></a></td> 
<!-- 	</tr> -->
<!-- </table> -->
<!--  -->
<!-- <!--  Category 메뉴 : 가로형인 경우  -------------------------------------->  
<!-- <table width="959" height="25" border="0" cellspacing="0" cellpadding="0" align="center"> -->
<!-- 	<tr> -->
<!-- 		<td align="left" bgcolor="#F7F7F7"> -->
<!-- 			<table border="0" cellspacing="0" cellpadding="0"> -->
<!-- 				<tr> -->
<!-- 					<td><a href="product.php?no=1"><img src="images/main_menu01_off.gif" width="96" height="30" border="1"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td> -->
<!-- 					<td><a href="product.php?no=2"><img src="images/main_menu02_off.gif" width="96" height="30" border="1"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td> -->
<!-- 					<td><a href="product.php?no=3"><img src="images/main_menu03_off.gif" width="96" height="30" border="1"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td> -->
<!-- 					<td><a href="product.php?no=4"><img src="images/main_menu04_off.gif" width="96" height="30" border="1"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td> -->
<!-- 					<td><a href="product.php?no=5"><img src="images/main_menu05_off.gif" width="96" height="30" border="1"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td> -->
<!-- 				</tr> -->
<!-- 			</table> -->
<!-- 		</td> -->
<!-- 	</tr> -->
<!-- </table> -->
<!-- <!------------------------------------------------------------------------>  
<!--  -->
<!-- <!--  상품 검색 ---------------------------------------------------------->  
<!-- <table width="959" height="25" border="0" cellspacing="0" cellpadding="0" align="center"> -->
<!-- 	<tr><td height="1" colspan="5" bgcolor="#F7F7F7"></td></tr> -->
<!-- 	<tr bgcolor="#F0F0F0"> -->
<!-- 		<td width="181" align="center"><font color="#666666">&nbsp <b>Welcome ! &nbsp;&nbsp 고객님.</b></font></td> -->
<!-- 		<td style="font-size:9pt;color:#666666;font-family:돋움;padding-left:5px;"></td> -->
<!-- 		<td align="right" style="font-size:9pt;color:#666666;font-family:돋움;"><b>상품검색 ▶&nbsp</b></td> -->
<!-- 		<!-- form1 시작 --> -->
<!-- 		<form name="form1" method="post" action="product_search.php"> -->
<!-- 		<td width="135"> -->
<!-- 			<input type="text" name="findtext" maxlength="40" size="17" class="cmfont1">&nbsp; -->
<!-- 		</td> -->
<!-- 		</form> -->
<!-- 		<!-- form1 끝 --> -->
<!-- 		<td width="65" align="center"><a href="javascript:Search()"><img src="images/i_search1.gif" border="0"></a></td> -->
<!-- 	</tr> -->
<!-- 	<tr><td height="1" colspan="5" bgcolor="#E5E5E5"></td></tr> -->
<!-- </table> -->
<!--  -->
<!-- <table width="959" border="0" cellspacing="0" cellpadding="0" align="center"> -->
<!-- 	<tr><td height="10" colspan="2"></td></tr> -->
<!-- 	<tr> -->
<!-- 		<td height="100%" valign="top"> -->
<!-- 			<!--  화면 좌측메뉴 시작 ----------------------------------------------->  
<!-- 			<table width="181" border="0" cellspacing="0" cellpadding="0"> -->
<!-- 				<tr>  -->
<!-- 					<td valign="top">  -->
<!-- 						<!--  Category 메뉴 : 세로인 경우 -------------------------------->  
<!-- 					 -->
<!-- 				<tr>  -->
<!-- 					<td>  -->
<!-- 						<!--  Custom Service 메뉴(QA, FAQ...) --> -->
<!-- 						<table width="177"  border="0" cellpadding="2" cellspacing="1" bgcolor="#afafaf"> -->
<!-- 							<tr><td height="3"  bgcolor="#a0a0a0"></td></tr> -->
<!-- 							<tr><td height="25" bgcolor="#f0f0f0" align="center" style="font-size:11pt;color:#333333"><b>Customer Service</b></td></tr> -->
<!-- 							<tr> -->
<!-- 								<td bgcolor="#FFFFFF"> -->
<!-- 									<table width="100%"  border="0" cellspacing="0" cellpadding="0"> -->
<!-- 										<tr><td><a href="qa.php"><img src="images/main_left_qa.gif" border="0" width="176"></a></td></tr> -->
<!-- 									</table> -->
<!-- 								</td> -->
<!-- 							</tr> -->
<!-- 							<tr> -->
<!-- 								<td bgcolor="#FFFFFF"> -->
<!-- 									<table width="100%"  border="0" cellspacing="0" cellpadding="0"> -->
<!-- 										<tr><td><a href="faq.php"><img src="images/main_left_faq.gif" border="0" width="176"></a></td></tr> -->
<!-- 									</table> -->
<!-- 								</td> -->
<!-- 							</tr> -->
<!-- 							<tr> -->
<!-- 								<td bgcolor="#FFFFFF"> -->
<!-- 									<table width="100%"  border="0" cellspacing="0" cellpadding="0"> -->
<!-- 										<tr><td><a href=""><img src="images/main_left_etc.gif" border="0" width="176"></a></td></tr> -->
<!-- 									</table> -->
<!-- 								</td> -->
<!-- 							</tr> -->
<!-- 							<tr> -->
<!-- 								<td bgcolor="#FFFFFF"> -->
<!-- 									<table width="100%"  border="0" cellspacing="0" cellpadding="0"> -->
<!-- 										<tr><td><a href=""><img src="images/main_left_etc.gif" border="0" width="176"></a></td></tr> -->
<!-- 									</table> -->
<!-- 								</td> -->
<!-- 							</tr> -->
<!-- 							<tr> -->
<!-- 								<td bgcolor="#FFFFFF"> -->
<!-- 									<table width="100%"  border="0" cellspacing="0" cellpadding="0"> -->
<!-- 										<tr><td><a href=""><img src="images/main_left_etc.gif" border="0" width="176"></a></td></tr> -->
<!-- 									</table> -->
<!-- 								</td> -->
<!-- 							</tr> -->
<!-- 						</table> -->
<!-- 					</td> -->
<!-- 				</tr> -->
<!-- 			</table> -->
<!-- 			<!--  화면 좌측메뉴 끝 ------------------------------------------------->  
<!-- 		</td> -->
<!-- 		<td width="10"></td> -->
<!-- 		<td valign="top"> -->
	<!--이 바튼은 단지 다음문서로 가는 테스트용 버튼임. 삭제할 것  --> 
 					<!--	&nbsp;&nbsp <input type="button" value="다음 문서로(테스트용)" onclick="form2.submit();"-->

<!-- 화면 하단 부분 : 회사정보/회사소개/이용정보/개인보호정책 ... ----------------------------> 
<!-- <br><br> -->
<!-- <table width="959" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"> -->
<!-- 	<tr>  -->
<!-- 		<td background="images/footer_bg.gif" height="11"></td> -->
<!-- 	</tr> -->
<!-- 	<tr><td height="5"></td></tr> -->
<!-- 	<tr>  -->
<!-- 		<td>  -->
<!-- 			<table width="959" border="0" cellspacing="0" cellpadding="0"> -->
<!-- 				<tr>  -->
<!-- 					<td valign="top"><a href="index.php"><img src="images/footer_logo.gif" border="0"></a></td> -->
<!-- 					<td width="28"></td> -->
<!-- 					<td>  -->
<!-- 						<table border="0" cellspacing="0" cellpadding="0"> -->
<!-- 							<tr>  -->
<!-- 								<td>  -->
<!-- 									<table border="0" cellspacing="0" cellpadding="0"> -->
<!-- 										<tr>  -->
<!-- 											<td><a href="company.php"><img src="images/footer_menu01.gif" border="0"></a></td> -->
<!-- 											<td><img src="images/footer_line.gif"></td> -->
<!-- 											<td><a href="useinfo.php"><img src="images/footer_menu02.gif" border="0"></a></td> -->
<!-- 											<td><img src="images/footer_line.gif"></td> -->
<!-- 											<td><a href="policy.php"><img src="images/footer_menu03.gif" border="0"></a></td> -->
<!-- 										</tr> -->
<!-- 									</table> -->
<!-- 								</td> -->
<!-- 							</tr> -->
<!-- 							<tr>  -->
<!-- 								<td><img src="images/footer_copyright.gif"></td> -->
<!-- 							</tr> -->
<!-- 						</table> -->
<!-- 					</td> -->
<!-- 					<td align="right" valign="top"> -->
<!-- 						<table border="0" cellspacing="0" cellpadding="0"> -->
<!-- 							<tr>  -->
<!-- 								<td align="right"> -->
<!-- 										<a href="index.php"><img src="images/footer_home.gif" border="0"></a>&nbsp -->
<!-- 										<a href="#top"><img src="images/footer_top.gif" border="0"></a> -->
<!-- 								</td> -->
<!-- 							</tr> -->
<!-- 							<tr> -->
<!-- 								<td> -->
<!-- 									<table border="0" cellspacing="0" cellpadding="0"> -->
<!-- 										<tr>  -->
<!-- 											<td><A HREF="http://www.ftc.go.kr/" target="_blank"><img src="images/footer_pic1.gif" border=0></A></td> -->
<!-- 											<td><img src="footer_line.gif" width="3" height="42"></td> -->
<!-- 											<td><A HREF="http://www.sgic.co.kr/" target="_blank"><img src="images/footer_pic2.gif" border=0></a></td> -->
<!-- 										</tr> -->
<!-- 									</table> -->
<!-- 								</td> -->
<!-- 							<tr>  -->
<!-- 						</table> -->
<!-- 					</td> -->
<!-- 				</tr> -->
<!-- 			</table> -->
<!-- 		</td> -->
<!-- 	</tr> -->
<!-- </table> -->
<!-- &nbsp -->