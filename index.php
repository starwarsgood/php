<?php
    //  ��� ��������� �������� �� �������. ������ � ��� �������� ������  ������������, ���� �� ��������� �� �����. ����� ����� ��������� �� �  ����� ������ ���������!!!
    session_start();
    ?>
    <html>
    <head>
    <title>������� ��������</title>
    </head>
    <body>
    <form action="testreg.php" method="post">

    <!--****  testreg.php - ��� ����� �����������. �� ����, ����� ������� �� ������  "�����", ������ �� ����� ���������� �� ��������� testreg.php �������  "post" ***** -->
 <p>
    <label>��� �����:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>


    <!--**** � ��������� ���� (name="login" type="text") ������������ ������ ���� ����� ***** -->
 
    <p>

    <label>��� ������:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>

    <!--**** � ���� ��� ������� (name="password" type="password") ������������ ������ ���� ������ ***** --> 

    <p>
    <input type="submit" name="submit" value="�����">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="Vivod.php">�����</a>

    <!--**** �������� (type="submit") ���������� ������ �� ��������� testreg.php ***** --> 
<br>
 <!--**** ������ �� �����������, ���� ���-�� �� ������ ����� ���� �������� ***** --> 
 <br>
<a href="reg.php">������������������</a> 
    </p></form>
    <br>
    <?php
    // ���������, ����� �� ���������� ������ � id ������������
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // ���� �����, �� �� �� ������� ������
    
    }
    else
    {

    // ���� �� �����, �� �� ������� ������
	
    echo "�� ����� �� ����, ��� ".$_SESSION['login']."<br><a  href='http://tvpavlovsk.sk6.ru/'>��� ������ �������� ������  ������������������ �������������</a>";
    }
    ?>
    </body>
    </html>