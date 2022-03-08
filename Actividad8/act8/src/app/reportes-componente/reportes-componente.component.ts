import { Component, OnInit } from '@angular/core';
import {IReportes} from '../iReportes';
import { ReportesService } from '../reportes.service';

@Component({
  selector: 'app-reportes-componente',
  templateUrl: './reportes-componente.component.html',
  styleUrls: ['./reportes-componente.component.css'],
})
export class ReportesComponenteComponent implements OnInit {

  public reporte: IReportes={name :'Carlos Alexis',id: 100,
                codigo:'1',
                vendedor:2,
                clasificacionVendedor:3,
                total:4,
                entrega:5}
                
  reportes: IReportes[] = [];

  selectedReporte?: IReportes;

  constructor(private datosReportes:ReportesService) { }

  ngOnInit(): void {

    this.datosReportes.getReportes().subscribe((data: any[])=>{
      console.log(data);
      this.reportes = data;
    })
  }

  onSelect(reporte: IReportes):void{
    this.selectedReporte = reporte;
  }
}
