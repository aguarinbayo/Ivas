/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ivas;
import ivas.operaciones;
import javax.ejb.Stateless;
import javax.jws.WebParam;
import javax.jws.WebService;

/**
 *
 * @author Claryicon
 */
@Stateless
@WebService(serviceName = "iva")

public class iva implements operaciones {
    @Override
    public double calcularIva(@WebParam(name = "calculo") double num){
        return num*1.19;
    }

}
