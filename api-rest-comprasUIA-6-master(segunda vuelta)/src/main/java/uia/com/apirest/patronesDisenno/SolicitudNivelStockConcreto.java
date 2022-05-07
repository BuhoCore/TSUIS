package uia.com.apirest.patronesDisenno;

import com.fasterxml.jackson.annotation.JsonCreator;
import com.fasterxml.jackson.annotation.JsonProperty;
import uia.com.apirest.compras.InfoComprasUIA;
import uia.com.apirest.compras.SolicitudOrdenCompra;

import java.util.ArrayList;
import java.util.List;

public class SolicitudNivelStockConcreto<items> extends AListaInfoComprasUIA {

    @JsonCreator
    public SolicitudNivelStockConcreto(@JsonProperty("id")int id, @JsonProperty("name")String name)
    {
        super(id, name);
    }

    public SolicitudNivelStockConcreto()

    {

    }




    public List<InfoComprasUIA> agregaItems()
    {
        ArrayList<InfoComprasUIA> newListaItems = new ArrayList<InfoComprasUIA>();
        SolicitudOrdenCompra nodo;
        List<InfoComprasUIA> misItems = this.getItems();

        for(int i=0; i<misItems.size(); i++)
        {
            List<InfoComprasUIA> miLista = misItems.get(i).getItems();

            List<InfoComprasUIA> newItems = null;

            SolicitudOrdenCompra miNewNodo = new SolicitudOrdenCompra(misItems.get(i).getId(), misItems.get(i).getName(), misItems.get(i).getCodigo(),
                    misItems.get(i).getUnidad(), misItems.get(i).getCantidad(), misItems.get(i).getVendedor(), misItems.get(i).getClasificacion());

            for(int j=0; j<miLista.size(); ++j)
            {
                InfoComprasUIA miNodo = miLista.get(j);
                nodo = new SolicitudOrdenCompra(miNodo.getId(), miNodo.getName(), miNodo.getCodigo(),
                        miNodo.getUnidad(), miNodo.getCantidad(), miNodo.getVendedor(), miNodo.getClasificacion());

                if (newItems == null)
                {
                    newItems = new ArrayList<InfoComprasUIA>();
                }
                nodo.setPadre(this.getItems().get(i).getId());
                newItems.add(nodo);
                miNodo.print();
            }
            miNewNodo.setItems(newItems);
            newListaItems.add(miNewNodo);
        }
        return newListaItems;
    }
}
