
package uia.com.apirest.patronesDisenno;
import uia.com.apirest.compras.InfoComprasUIA;
import java.util.List;

public class DecoradorSolicitudOC extends InfoComprasUIA implements IListaInfoComprasUIA {

    protected  SolicitudNivelStockConcreto solicitud;

    public DecoradorSolicitudOC(SolicitudNivelStockConcreto miSolicitudOC)
    {
        this.solicitud=miSolicitudOC;
        this.setItems(this.solicitud.agregaItems());
    }

    @Override
    public List<InfoComprasUIA> getItems()
    {
        return super.getItems();
    }

    @Override
    public void setItems(List<InfoComprasUIA> l)
    {
        super.setItems(l);
    }

    @Override
    public int getId() {
        return 0;
    }

    @Override
    public void setId(int id) {

    }

    @Override
    public String getName() {
        return null;
    }

    @Override
    public void setName(String name) {

    }
}