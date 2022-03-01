import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ReportesComponeteComponent } from './reportes-componete.component';

describe('ReportesComponeteComponent', () => {
  let component: ReportesComponeteComponent;
  let fixture: ComponentFixture<ReportesComponeteComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ReportesComponeteComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ReportesComponeteComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
