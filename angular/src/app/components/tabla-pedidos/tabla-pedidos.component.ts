import { Component, OnInit, ViewChild } from '@angular/core';
import { PedidosServiceService } from 'src/app/services/pedidos/pedidos-service.service';
import {MatPaginator} from '@angular/material/paginator';
import { MatTableDataSource } from '@angular/material/table';
import { MatSort } from '@angular/material/sort';

@Component({
  selector: 'app-tabla-pedidos',
  templateUrl: './tabla-pedidos.component.html',
  styleUrls: ['./tabla-pedidos.component.css']
})
export class TablaPedidosComponent implements OnInit {
  constructor(private pedido:PedidosServiceService) { }

  displayedColumns: string[] = ['id', 'cliente', 'nit', 'fecha','boton'];
  dataSource!: MatTableDataSource<any>;

  @ViewChild(MatPaginator) paginator!: MatPaginator;
  @ViewChild(MatSort) sort!: MatSort;

  ngOnInit(): void {
    const user: any = localStorage.getItem('user');
    const userObj = JSON.parse(user);

    this.pedido.traePedidos(userObj.id).subscribe({
      next:(res)=>{
        this.dataSource = new MatTableDataSource(res);
        this.dataSource.paginator = this.paginator;
        this.dataSource.sort = this.sort;
      },
      error:()=>{
        console.log("error al traer la info");
      }
    })
  }

  prueba(id:any){
    console.log(id);
  }

  applyFilter(event: Event) {
    const filterValue = (event.target as HTMLInputElement).value;
    this.dataSource.filter = filterValue.trim().toLowerCase();

    if (this.dataSource.paginator) {
      this.dataSource.paginator.firstPage();
    }
  }

}
