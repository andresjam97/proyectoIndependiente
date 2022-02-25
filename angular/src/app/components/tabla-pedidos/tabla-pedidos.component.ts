import { Component, OnInit, ViewChild } from '@angular/core';
import { PedidosServiceService } from 'src/app/services/pedidos/pedidos-service.service';
import {MatPaginator} from '@angular/material/paginator';
import { MatTableDataSource } from '@angular/material/table';

@Component({
  selector: 'app-tabla-pedidos',
  templateUrl: './tabla-pedidos.component.html',
  styleUrls: ['./tabla-pedidos.component.css']
})
export class TablaPedidosComponent implements OnInit {
  pedidos:any;
  dataSource:any;


  constructor(private pedido:PedidosServiceService) { }
  ngOnInit(): void {
    const user: any = localStorage.getItem('user');
    const userObj = JSON.parse(user);

    this.pedido.traePedidos(userObj.id).subscribe((res)=>{
      console.log(res);
      this.dataSource = new MatTableDataSource<any>(res);
    }, (err) =>{
      console.log(err);
    })
  }

  @ViewChild(MatPaginator) paginator!: MatPaginator;

  ngAfterViewInit() {
    this.dataSource.paginator = this.paginator;
  }
  displayedColumns: string[] = ['position', 'name', 'weight', 'symbol','boton'];

  prueba(id:any){
    console.log(id);
  }

}
