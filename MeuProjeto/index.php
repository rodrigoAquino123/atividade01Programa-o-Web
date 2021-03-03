<html>
  <head> <link rel = "stylesheet" href="css/minhacss.css"> </head>
  <title>RS Cursos</title>
  <h1>R.A Cursos</h1> 
  <header class = "buttonI" action = "">
  <a href="login.php"><button>Fazer Login</button></a>
  <a href="cadastro.php"><button>Cadastre-se</button></a>
      
  </header><br>

  <body>
   
  <p>A melhor plataforma de cursos on line, com certificado reconhecido nacionalmente. Quer melhorar suas habilidade
    e ter mais chance de entrar para o mercado de trabalho.
  </p>
<br>
<ul>
     <li>
        <img width="390px"  height="290px" src="img/imagem1.jpg">
        <h2>Java avançado</h2>
        <h2>R$ 23,00</h2>
    </li>

    <li>
        <img  width="390px"  height="290px" src="img/imagem2.jpg">
        <h2>Photoshop do zero</h2>
        <h2>R$ 23,00</h2>
    </li>

      <li>
        <img width="390px"  height="290px" src="img/imagem3.jpg">
        <h2>InDesign</h2>
        <h2>R$ 23,00</h2>
    </li>

    </ul>

<br>


  <h1 align = "center">Tabela de Cursos</h1>
  <div id = 'header' align ="center"> 
    <br>
  <table class = "tabela1" border="1">
        <tr>
            <td align = "center">CURSO</td>
            <td align = "center">VALOR</td>
            
        </tr>
        <tr>
            <td>Conserto e Manutenção de Computadores</td> 
            <td>R$23,34</td>   
        </tr>
        <tr>
            <td>Tecnólogo em Gestão Financeira</td>
            <td>R$24,34</td> 
        </tr>
        <tr>
            <td>Técnico em informática</td>
            <td>R$24,34</td> 
        </tr>
        <tr>
            <td>Tecnólogo em Processos Gerenciais</td>
            <td>R$24,34</td> 
        </tr>
        <tr>
            <td>Técnico em Segurança do Trabalho</td>
            <td>R$24,34</td> 
        </tr>
        
    </table>
  </div><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  <h1 align = "center">Formulário</h1>
  <form id = 'form1' method="POST" align = "center"><br>
    
    <div class ="formulario1" action ="">
    <label>Selecione o Curso</label>
    <SELECT id = "curso" class = "selecao" NAME = "curso">
        <OPTION VALUE = "Nenhum">Nenhum</OPTION>
        <OPTION VALUE = "Conserto e Manutenção de Computadores">Conserto e Manutenção de Computadores </OPTION>
        <OPTION VALUE = "Photoshop do zero " >Photoshop do zero </OPTION>
        <OPTION VALUE = "InDesign">InDesign </OPTION>
        <OPTION VALUE = "Java avançado" >Java avançado </OPTION>
    </SELECT><br><br>
    <input class = "buttonComprar" TYPE="submit" NAME="botao" VALUE = "Comprar" />
    </div>

  </form>
  <?php
        
        @$curso = $_POST['curso'];
        //echo "<p> Curso: $curso R$ 23,00</p>"; 
        if($curso=="Nenhum"){
          echo "<p> Selecione um Curso</p>";

        }else{
          echo "<p> Curso: $curso R$ 23,00</p>"; 
        }
        
        
       
    ?>


  </body>
</html>