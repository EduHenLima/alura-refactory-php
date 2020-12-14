<?php

class MinhaExcecao extends DomainException{
    
    public function exibeEduardo(){
        echo "Cai dentro da Exception";
    }
}

try {
    throw new MinhaExcecao();
}catch(MinhaExcecao $e){
    $e->exibeEduardo();
}
