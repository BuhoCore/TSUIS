package uia.com.apirest.patronesDisenno.fachada;

import uia.com.apirest.compras.GestorCompras;
import uia.com.apirest.modelo.ItemComprasUIAModelo;
import uia.com.apirest.modelo.ItemSolicitudOCModelo;

import java.util.ArrayList;

public abstract class FachadaSolicitudOC extends FachadaModel{


    public FachadaSolicitudOC(GestorCompras gestorCompras) {
        super(gestorCompras);
    }

    @Override
    public ArrayList<ItemSolicitudOCModelo> getItemsSolicitudOC(int id) {
        return null;
    }

    @Override
    public ArrayList<ItemComprasUIAModelo> getItems(int id) {
        return null;
    }


}
