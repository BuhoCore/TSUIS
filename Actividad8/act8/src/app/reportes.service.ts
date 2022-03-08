import { Injectable } from '@angular/core';
import { catchError, Observable, of, tap } from 'rxjs';
import { IReportes } from './iReportes';
import { HttpClient} from '@angular/common/http'
import { HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ReportesService {

  httpOptions = {
    headers: new HttpHeaders({'Content Type':'application/json'})
  }
  reportesUrl = "http://localhost:4200 "
  
  constructor(private http: HttpClient) { }

  public getReportes(){
    return this.http.get<IReportes[]>(this.reportesUrl)
    .pipe(
      tap(_=>console.log('extrayendo catalogos')),
      catchError(this.handleError<IReportes[]>('loadReporte',[]))
    );
  }
  
  private handleError<T>(operation = 'operation', result?: T){
    return (error: any): Observable<T> => {
    console.error(error);
    console.log(`${operation} failed: ${error.massage}`);
    return of(result as T);
      };
    }
    
    agregaReporte(Reporte:IReportes):Observable<IReportes>{
      return this.http.post<IReportes>(this.reportesUrl,Reporte,this.httpOptions).pipe(
      tap((newReporte: IReportes) => console.log(`added Reporte w/ id=${newReporte.id}`)),
      catchError(this.handleError<IReportes>(`addReporte`))
        );
      }
 
 }
