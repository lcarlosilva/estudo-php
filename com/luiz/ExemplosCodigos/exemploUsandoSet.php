<?php

 function cadastrarNovoEvento($evento) {
        $this->db->set('evtCod', $evento->evtCod);
        $this->db->set('evtNome', $evento->evtNome);
        $this->db->set('evtCidade', $evento->evtCidade);
        $this->db->set('evtData', $evento->evtData);
        $this->db->set('evtStatus', $evento->evtStatus);
        $this->db->set('evtDesc', $evento->evtDesc);
        $this->db->set('tpeCod', $evento->tpeCod);

        return $this->db->insert($evento->__tabela);
    }
