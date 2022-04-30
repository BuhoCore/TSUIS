package uia.com.apirest.patronesDisenno.fachada;

import uia.com.apirest.compras.InfoComprasUIA;
import uia.com.apirest.modelo.ItemComprasUIAModelo;
import uia.com.apirest.modelo.ReporteModelo;
import uia.com.apirest.modelo.SolicitudOCModelo;

import java.util.ArrayList;

public interface IFachada {
    ArrayList<ItemComprasUIAModelo> getItems(int id);
    ArrayList<SolicitudOCModelo> getSolicitudes(int id);
    ArrayList<ReporteModelo> getItemsModelo(int id);
}

