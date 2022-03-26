import { Component, OnInit, Input, Output } from '@angular/core';
import { IReporte } from '../iReporte';
import {SolicitudService} from '../solicitud.service';
import { ISolicitud } from '../iSolicitud';


@Component({
  selector: 'app-cotizacion-detalle',
  templateUrl: './cotizacion-detalle.component.html',
  styleUrls: ['./cotizacion-detalle.component.css']
})
export class CotizacionDetalleComponent implements OnInit {

  public solicitud = { name: "", id: 0, padre:0 }

  solicitudes: ISolicitud[] = [];
 
  selectedSolicitud?: ISolicitud;
 
  @Input() reporte!: IReporte;

  constructor(public datosSolicitudes:SolicitudService) { }

  ngOnInit(): void {

    this.datosSolicitudes.getSolicitudes(this.reporte.id).subscribe((data: any[])=>{
      console.log(data);
      this.solicitudes = data;
    })
    
  }

  onSelect(solicitud: ISolicitud): void {
    this.selectedSolicitud = solicitud;
  }

  agregar(name: string, id:string): void {
    name = name.trim();

    var newSolicitud = <ISolicitud>{};
    
    newSolicitud.id=id;
    newSolicitud.name=name;
    newSolicitud.type="solicitudNS";
    
    if (!name) { return; }
    this.datosSolicitudes.agregaSolicitud(newSolicitud)
      .subscribe(solicitud => {
        this.solicitudes.push(solicitud);
      });
  }

}
