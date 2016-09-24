interface calc1
{
	public void area1();
	
}
interface calc2
{
	public void area2();
}
class triangle implements calc1,calc2
{
public void area1()
{
	System.out.println("triangle1");
} 	
public void area2()
{
	System.out.println("triangle2");
} 
}
class rectangle implements calc1,calc2
{
	public void area1()
	{
		System.out.println("rectangle1");
	}
	public void area2()
	{
		System.out.println("rectangle2");
	}
}
class square implements calc1,calc2
{
	public void area1()
	{
		System.out.println("square1");
	}
	public void area2()
	{
		System.out.println("square2");
	}
}
class circle implements calc1,calc2
{
	public void area1()
	{
		System.out.println("circle1");
	}
	public void area2()
	{
		System.out.println("circle2");
	}
}