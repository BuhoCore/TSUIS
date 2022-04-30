package uia.com.apirest.patronesDisenno.fachada;

import uia.com.apirest.compras.GestorCompras;
import uia.com.apirest.modelo.ItemComprasUIAModelo;

import java.util.ArrayList;

public class FachadaReportes extends FachadaModel {

    public FachadaReportes (GestorCompras gestorCompras) {
        super(gestorCompras);
    }

    @Override
    public ArrayList<ItemComprasUIAModelo> getItems(int id) {
        return null;
    }
}
