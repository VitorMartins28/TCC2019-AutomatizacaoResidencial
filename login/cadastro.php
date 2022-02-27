<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="sortcut icon" href="assets/img/backgrounds/logo.png" type="image/x-icon" />

        <title>Cadastro de Usuários</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/MaterialDesign-Webfont-master/css/materialdesignicons.css?=12">


    </head>

    <body background="assets/img/backgrounds/fundo.png">
    <img src="assets/img/backgrounds/55.png">

    <div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
    <nav style="background-color:#5C795C;">
    <div class="container-fluid">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="mdi mdi-menu"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="a1" href="Admin/total_usuarios.php">Total de cadastros <span class="sr-only">(current)</span></a></li>
        <li><a class="a1" href="../index.php">Voltar para o Login</a></li>
        <li><a class="a1" href="Admin/listar_usuarios.php">Lista de usuários</a></li>
      </ul>   
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>

      <form action="cadastra_usuario.php" method="post" enctype="multipart/form-data" name="formcadastro">
        <div class="modal-dialog">
            <div class="modal-content">                
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                     <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                  </button>
                    <h3 class="modal-title" id="modal-login-label" style="color:white;">Cadastro de Usuários</h3>                     
                </div>
                    
                    <div class="modal-body">
                    <br>
                    <h4>Insira os dados do cliente para efetuar o cadastro</h4>
                    <br>

                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-username">Login</label>
                                <input type="text" name="login" id="login" placeholder="Login">
                                <i class="mdi mdi-account"></i>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-1">Senha</label>
                                <input type="password" name="senha" id="label" placeholder="Senha" >
                                <i class="mdi mdi-key"></i>
                            </div>
                            </div>

                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-username">Repetir Senha</label>
                                <input type="password" name="rep_senha" id="label2" placeholder="Repetir Senha" >
                                <i class="mdi mdi-key"></i>
                          </div>
                            </div>
                            
                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-password">Nome</label>
                                <input type="text" name="nome" id="label3" placeholder="Nome">
                                <i class="mdi mdi-account-box"></i> 
                            </div>
                            </div>

                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-username">E-Mail</label>
                                <input type="text" name="email" id="label4" placeholder="E-Mail">
                                <i class="mdi mdi-email"></i>
                            </div>
                            </div>
                            <br>
                            <div class="sexo" align="center">
                                <label for="form-username">Sexo</label> <br />
                                <input type="radio" name="sexo" value="Masculino" id="radiobutton"  >
                                <label for="radiobutton">Masculino 
                                &ensp;&ensp;<input name="sexo" type="radio" value="Feminino" id="radio" />
                                Feminino<span class="style9">*</span></label>
                            </div>
                            <br>
                            <div class="dn">
                                <label for="form-username" algin="center">Data de Nascimento</label> <br />
                            
                             <!--Dia-->
                            <label for="select" ></label>
                                <select name="dia" id="dia">
                                  <option value="">Dia  </option>
                                  <option value="01">01</option>
                                  <option value="02">02</option>
                                  <option value="03">03</option>
                                  <option value="04">04</option>
                                  <option value="05">05</option>
                                  <option value="06">06</option>
                                  <option value="07">07</option>
                                  <option value="08">08</option>
                                  <option value="09">09</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                  <option value="14">14</option>
                                  <option value="15">15</option>
                                  <option value="16">16</option>
                                  <option value="17">17</option>
                                  <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31">31</option>
                                </select>
                                
                                <!--/ Mês-->
                                <label for="label5"></label>
                                <select name="mes" id="label5">
                                  <option value="">Mês </option>
                                  <option value="01">Janeiro</option>
                                  <option value="02">Fevereiro</option>
                                  <option value="03">Março</option>
                                  <option value="04">Abril</option>
                                  <option value="05">Maio</option>
                                  <option value="06">Junho</option>
                                  <option value="07">Julho</option>
                                  <option value="08">Agosto</option>
                                  <option value="09">Setembro</option>
                                  <option value="10">Outubro</option>
                                  <option value="11">Novembro</option>
                                  <option value="12">Dezembro</option>
                                </select>
                                
                                <!--/ Ano-->
                                <label for="label6"></label>
                                <select  name="ano" id="label6">
                                  <option value=""> Ano </option>
                                  <option value="1900">1900</option>
                                  <option value="1901">1901</option>
                                  <option value="1902">1902</option>
                                  <option value="1903">1903</option>
                                  <option value="1904">1904</option>
                                  <option value="1905">1905</option>
                                  <option value="1906">1906</option>
                                  <option value="1907">1907</option>
                                  <option value="1908">1908</option>
                                  <option value="1909">1909</option>
                                  <option value="1910">1910</option>
                                  <option value="1911">1911</option>
                                  <option value="1912">1912</option>
                                  <option value="1913">1913</option>
                                  <option value="1914">1914</option>
                                  <option value="1915">1915</option>
                                  <option value="1916">1916</option>
                                  <option value="1917">1917</option>
                                  <option value="1918">1918</option>
                                  <option value="1919">1919</option>
                                  <option value="1920">1920</option>
                                  <option value="1921">1921</option>
                                  <option value="1922">1922</option>
                                  <option value="1923">1923</option>
                                  <option value="1924">1924</option>
                                  <option value="1925">1925</option>
                                  <option value="1926">1926</option>
                                  <option value="1927">1927</option>
                                  <option value="1928">1928</option>
                                  <option value="1929">1929</option>
                                  <option value="1930">1930</option>
                                  <option value="1931">1931</option>
                                  <option value="1932">1932</option>
                                  <option value="1933">1933</option>
                                  <option value="1934">1934</option>
                                  <option value="1935">1935</option>
                                  <option value="1936">1936</option>
                                  <option value="1937">1937</option>
                                  <option value="1938">1938</option>
                                  <option value="1939">1939</option>
                                  <option value="1940">1940</option>
                                  <option value="1941">1941</option>
                                  <option value="1942">1942</option>
                                  <option value="1943">1943</option>
                                  <option value="1944">1944</option>
                                  <option value="1945">1945</option>
                                  <option value="1946">1946</option>
                                  <option value="1947">1947</option>
                                  <option value="1948">1948</option>
                                  <option value="1949">1949</option>
                                  <option value="1950">1950</option>
                                  <option value="1951">1951</option>
                                  <option value="1952">1952</option>
                                  <option value="1953">1953</option>
                                  <option value="1954">1954</option>
                                  <option value="1955">1955</option>
                                  <option value="1956">1956</option>
                                  <option value="1957">1957</option>
                                  <option value="1958">1958</option>
                                  <option value="1959">1959</option>
                                  <option value="1960">1960</option>
                                  <option value="1961">1961</option>
                                  <option value="1962">1962</option>
                                  <option value="1963">1963</option>
                                  <option value="1964">1964</option>
                                  <option value="1965">1965</option>
                                  <option value="1966">1966</option>
                                  <option value="1967">1967</option>
                                  <option value="1968">1968</option>
                                  <option value="1969">1969</option>
                                  <option value="1970">1970</option>
                                  <option value="1971">1971</option>
                                  <option value="1972">1972</option>
                                  <option value="1973">1973</option>
                                  <option value="1974">1974</option>
                                  <option value="1975">1975</option>
                                  <option value="1976">1976</option>
                                  <option value="1977">1977</option>
                                  <option value="1978">1978</option>
                                  <option value="1979">1979</option>
                                  <option value="1980">1980</option>
                                  <option value="1981">1981</option>
                                  <option value="1982">1982</option>
                                  <option value="1983">1983</option>
                                  <option value="1984">1984</option>
                                  <option value="1985">1985</option>
                                  <option value="1986">1986</option>
                                  <option value="1987">1987</option>
                                  <option value="1988">1988</option>
                                  <option value="1989">1989</option>
                                  <option value="1990">1990</option>
                                  <option value="1991">1991</option>
                                  <option value="1992">1992</option>
                                  <option value="1993">1993</option>
                                  <option value="1994">1994</option>
                                  <option value="1995">1995</option>
                                  <option value="1996">1996</option>
                                  <option value="1997">1997</option>
                                  <option value="1998">1998</option>
                                  <option value="1999">1999</option>
                                  <option value="2000">2000</option>
                                  <option value="2001">2001</option>
                                  <option value="2002">2002</option>
                                  <option value="2003">2003</option>
                                  <option value="2004">2004</option>
                                  <option value="2005">2005</option>
                                  <option value="2006">2006</option>
                                  <option value="2007">2007</option>
                                  <option value="2008">2008</option>
                                  <option value="2009">2009</option>
                                  <option value="2010">2010</option>
                                  <option value="2011">2011</option>
                                  <option value="2012">2012</option>
                                  <option value="2013">2013</option>
                                  <option value="2014">2014</option>
                                  <option value="2015">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                                    
                                </select>
                              <span class="style9">*</span>
                            </div>
                                <br>
                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-password">País</label>
                                <input type="text" name="pais" id="label7" placeholder="País">
                                <i class="mdi mdi-map-marker"></i>
                            </div>
                            </div>

                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-username">Estado</label>
                                <input type="text" name="estado" id="label8" placeholder="Estado" >
                                <i class="mdi mdi-map"></i>
                            </div>
                            </div>
                            
                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-password">Cidade</label>
                                <input type="text" name="cidade" id="label9" placeholder="Cidade">
                                <i class="mdi mdi-city"></i>
                            </div>
                            </div>

                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-password">CEP</label>
                                <input type="text" name="cep" id="label10" placeholder="Cep" >
                                <i class="mdi mdi-map-marker-radius"></i>

                            </div>
                            </div>
                            
                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-password">Pergunta Secreta</label>
                                <input type="text" name="pergunta" id="label11" placeholder="Pergunta Secreta" >
                                <i class="mdi mdi-file-document-box-outline"></i>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="inputWithIcon">
                                <label class="sr-only" for="form-password">Resposta</label>
                                
                                <input type="text" name="resposta" id="label12" placeholder="Resposta">
                                <i class="mdi mdi-pencil-lock"></i> 
                            </div>                            
                            </div>
                            <button type="submit" name="Cadastrar" value="Cadastrar" id="Cadastrar" class="btn1">Cadastrar</button>
                            <button type="reset" name="limpar" value="limpar dados" id="label13" class="btn1">Limpar Campos</button>
                        </form>
                        
                    </div>
                    
                </div>
            </div>
        <!--</div>-->

        <div class="footers">
            System Home Security © 2019</div>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>