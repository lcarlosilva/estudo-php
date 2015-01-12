<?php
class Testando {
        private $nome;

        public function __call($method, $params)
        {
//            var_dump($method, $params);
            switch (true) {
                case ($method == 'setNome' && count($params) == 1):
                    echo 'um';
                    $this->nome = $params[0];
                    break;
                case ($method == 'setNome' && count($params) > 1):
                    echo 'dois';
                    $this->nome = implode(' ', $params);
                    break;
                case 'imprimirNome':
                    echo $this->nome;
                    break;
            }
        }

        private function setNome () {
            echo 'hahahahhahaha';
        }

    }

    $teste = new Testando();
    $teste->setNome('Luiz', 'Carlos');
    $teste->imprimirNome();