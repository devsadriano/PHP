<?php
// class ContratoClt{
//     public function calcularSalario(){}
// }

// class Estagio{
//     public function bolsaAuxilio(){}
// }

// //se fosse ter q adicionar outro tipo de contrato
// class ContratoPj{
//     public function calcularPagamento(){}
// }

// //aqui teria q adcionar mais um elseif
// class FolhaDePagamento{
//     public function calcular($funcionario){
//         if ($funcionario instanceof ContratoClt){ //se funcionario for uma classe do tipo ContratoClt
//             $salario = $funcionario->calcularSalario();
//         } elseif ($funcionario instanceof Estagio){
//             $salario = $funcionario->bolsaAuxilio();
//         } elseif ( $funcionario instanceof ContratoPj){
//             $salario = $funcionario->calcularPagamento();
//         }
//         return $salario;
//     }
// }
// // acima viola o cinceito SOLID O aberto fechado


//jeito certo

interface Remunaravel{
    // toda classe q implementar esse Remuneravel tem q ter esse cara public function remuneracao(); 
    public function remuneracao();
}

class ContratoClt implements Remunaravel {
    public function remuneracao(){}
}

class Estagio implements Remunaravel{
    public function remuneracao(){}
}

class ContratoPj implements Remunaravel{
    public function remuneracao(){}
}

//quarta implementacao
class ContratoInternacional implements Remunaravel{
    public function remuneracao(){}
}

class FolhaDePagamento{
    public function calcular(Remunaravel $funcionario){
        return $funcionario->remuneracao();
    }
}
//agora eu quero adicionar no futuro um quarto tipo de contratacao
//eu extendo a minha funcionalidade no caso Remunaravel
