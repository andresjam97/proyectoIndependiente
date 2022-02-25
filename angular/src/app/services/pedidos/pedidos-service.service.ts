import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs/internal/Observable';

@Injectable({
  providedIn: 'root'
})
export class PedidosServiceService {

  constructor(private http: HttpClient) { }

  traePedidos(user_id:any):Observable<any>{
    const user: any = localStorage.getItem('user');
    const userObj = JSON.parse(user);

    const token = userObj.token;

     const headers = new HttpHeaders({
      Authorization: `Bearer ${token}`,
    });
    return this.http.get(`http://localhost:8000/api/pedidosUser/${user_id}`, {
      headers: headers,
    });
  }
}
