<?php

function a(){
    try {
        echo "Rodei o código";
        return 0;
    }catch (Throwable $e){
        echo "Problema";
        return 1;
    } finally {
        echo "Final da função";
    }
}

echo a();
