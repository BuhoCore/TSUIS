import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import {Proveedor} from '../proveedor'

@Component({
  selector: 'app-proveedores',
  templateUrl: './proveedores.component.html',
  styleUrls: ['./proveedores.component.css']
})
export class ProveedoresComponent implements OnInit {

  proveedor: Proveedor ={
    id: 1,
    name: 'Ernesto'
  }

  constructor() { }

  ngOnInit(): void {
  }

}
